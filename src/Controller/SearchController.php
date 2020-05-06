<?php declare(strict_types=1);

namespace App\Controller;

use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\AbstractFOSRestController;
use FOS\RestBundle\Request\ParamFetcher;
use Mathematicator\Search\Search;
use Symfony\Component\HttpFoundation\JsonResponse;

class SearchController extends AbstractFOSRestController
{

    /**
     * @Rest\Get("/v1/search")
     * @Rest\QueryParam(name="q", nullable=false)
     * @param ParamFetcher $paramFetcher
     * @return JsonResponse
     */
    public function search(
        ParamFetcher $paramFetcher
    ): JsonResponse
    {
        $query = (string) $paramFetcher->get('query');
        // $response = $search->search($query);

        return new JsonResponse([
            'q' => $query
        ]);
    }
}
