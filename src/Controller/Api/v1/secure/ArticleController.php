<?php
namespace App\Controller\Api\v1\secure;



use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * class ArticleController
 * @package App\Controller\Api\v1\secure
 * @Route("/api/v1/secure/")
 */

class ArticleController extends AbstractController
{
    
    /**
     * @Route("articles", name="article")
     * @return JsonResponse
     * @Security("is_granted('ROLE_AUTHOR')")
     */

public function articles(): JsonResponse
{
    return new JsonResponse([
        'aricles' => []
    ]);
}

}
