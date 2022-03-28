<?php

namespace App\Controller\Backend;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/backend")
 */
class BackendController extends AbstractController
{
	const menu = "dashboard";
	const sub_menu = "backend";
	
    /**
     * @Route("/", name="app_backend")
     */
    public function index(): Response
    {
        return $this->render('backend/index.html.twig', [
            'controller_name' => 'BackendController',
	        'menu' => self::menu,
	        'sub_menu' => self::sub_menu
        ]);
    }
}
