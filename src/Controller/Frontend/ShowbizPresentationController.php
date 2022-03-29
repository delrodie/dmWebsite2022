<?php

namespace App\Controller\Frontend;

use App\Repository\ShowbizPresentationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/showbiz/presentation")
 */
class ShowbizPresentationController extends AbstractController
{
    /**
     * @Route("/", name="app_showbiz_presentation")
     */
    public function index(ShowbizPresentationRepository $presentationRepository): Response
    {
        return $this->render('showbiz_presentation/index.html.twig', [
            'presentation' => $presentationRepository->findOneBy([],['id'=>"ASC"]),
        ]);
    }
}
