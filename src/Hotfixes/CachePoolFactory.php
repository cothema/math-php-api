<?php declare(strict_types=1);

namespace App\Hotfixes;

use Contributte\Psr6\ICachePoolFactory;
use Psr\Cache\CacheItemPoolInterface;
use Symfony\Component\Cache\Adapter\FilesystemAdapter;

class CachePoolFactory implements ICachePoolFactory
{

    public function create(string $namespace): CacheItemPoolInterface
    {
        return new FilesystemAdapter($namespace);
    }

}
