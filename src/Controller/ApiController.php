<?php declare(strict_types = 1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

class ApiController extends AbstractController
{
    
    /**
     * get all users
     */
    public function getAllUsers()
    {
        return new JsonResponse(null, Response::HTTP_OK);
    }
    
    /**
     * get one user by id
     */
    public function getOneUser($id)
    {
        return new JsonResponse(null, Response::HTTP_OK); 
    }
    
}
