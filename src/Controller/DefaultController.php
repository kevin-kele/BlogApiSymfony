<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{


    /**
     * @Route("/",name="home")
     * @return JsonResponse
     */

    public function home():JsonResponse 
    {
        return new JsonResponse([
            'action'=>'index',
            'time'=>time()
        ]);
    }

    /**
     * @Route("/api",name="apiDoc")
     * @return JsonResponse
     */

    public function apiDoc():JsonResponse 
    {
        return new JsonResponse([
            'title'=>'eureka',
        ]);
    }
}
