<?php declare(strict_types = 1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class ApiController extends AbstractController
{   
    /**
     * get all users
     */
    public function getAllUsers(/** ?int $limit, ?int $offset*/Request $request): JsonResponse
    {
        $data = ['limit' => $request->query->get('limit'), 'offset' => $request->query->get('offset')];
        return new JsonResponse($data, Response::HTTP_OK);
    }
    
    /**
     * get one user by id
     */
    public function getOneUser(int $id): JsonResponse
    {
        return new JsonResponse(['id' => $id], Response::HTTP_OK); 
    }
    
}
