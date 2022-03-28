<?php

namespace App\Controller\Frontend;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/showbiz")
 */
class ShowbizHomeController extends AbstractController
{
    /**
     * @Route("/", name="app_showbiz_home")
     */
    public function index(): Response
    {
        return $this->render('showbiz_home/index.html.twig', [
            'controller_name' => 'ShowbizHomeController',
        ]);
    }
}
