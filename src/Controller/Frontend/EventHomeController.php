<?php

namespace App\Controller\Frontend;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/evenementiel')]
class EventHomeController extends AbstractController
{
    #[Route('/', name: 'app_event_home')]
    public function index(): Response
    {
        return $this->render('event_home/index.html.twig', [
            'controller_name' => 'EventHomeController',
        ]);
    }
}
