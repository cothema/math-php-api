<?php declare(strict_types=1);

namespace App\Hotfixes;

use Nette\Application\IRouter;
use Nette\Application\Routers\Route;
use Nette\Application\Routers\RouteList;
use Nette\StaticClass;

/**
 * TODO: remove this class
 *
 * Class RouterFactory
 * @package App
 */
class RouterFactory
{

	use StaticClass;

	/**
	 * @return IRouter
	 */
	public static function createRouter(): IRouter
	{
		$router = new RouteList;

		$router[] = self::createFrontRouter();

		return $router;
	}

	private static function createFrontRouter(): IRouter
	{
		$router = new RouteList('Front');

		$router[] = new Route('<presenter>/<action>', 'Homepage:default');

		return $router;
	}

}
