<?php declare(strict_types=1);

namespace App\Controller;

use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\AbstractFOSRestController;
use Symfony\Component\HttpFoundation\JsonResponse;

class PingController extends AbstractFOSRestController
{

    /**
     * @Rest\Get("/v1/ping")
     */
    public function ping(): JsonResponse
    {
        return new JsonResponse([
            'serverTime' => time()
        ]);
    }
}
