<?php declare(strict_types=1);

namespace App\Controller;

use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\AbstractFOSRestController;
use FOS\RestBundle\Request\ParamFetcherInterface;
use Mathematicator\Engine\EngineSingleResult;
use Mathematicator\Engine\InvalidDataException;
use Mathematicator\Engine\NoResultsException;
use Mathematicator\Search\Search;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

class SearchController extends AbstractFOSRestController
{

    /**
     * @Rest\Get("/v1/search")
     * @Rest\QueryParam(name="q", nullable=false)
     * @param ParamFetcherInterface $paramFetcher
     * @param Search $search
     * @return JsonResponse
     */
    public function search(
        ParamFetcherInterface $paramFetcher,
        Search $search
    ): JsonResponse
    {
        $query = (string) $paramFetcher->get('q');

        try {
            /** @var EngineSingleResult $response */
            $response = $search->search($query);

            $serializer = new Serializer([new ObjectNormalizer()]);

            $response = [
                'query' => [
                    'input' => $query
                ],
                'interpretation' => [
                    'boxes' => [$serializer->normalize($response->getInterpret())]
                ],
                'response' => [
                    'boxes' => $serializer->normalize($response->getBoxes())
                ]
            ];

            return new JsonResponse($response);
        } catch (InvalidDataException $e) {
            return new JsonResponse([
                'error' => 'Invalid data'
            ]);
        } catch (NoResultsException $e) {
            return new JsonResponse([
                'result' => null
            ]);
        }
    }
}
