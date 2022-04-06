<?php

namespace App\Controller\Frontend;

use App\Entity\ShowbizArtiste;
use App\Entity\ShowbizService;
use App\Entity\ShowbizSlide;
use Doctrine\Persistence\ManagerRegistry;
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
    public function index(ManagerRegistry $managerRegistry): Response
    {
        return $this->render('showbiz_home/index.html.twig', [
            'slides' => $managerRegistry->getRepository(ShowbizSlide::class)->findBy(['statut'=>true]),
	        'services' => $managerRegistry->getRepository(ShowbizService::class)->findAll(),
	        'artistes' => $managerRegistry->getRepository(ShowbizArtiste::class)->findBy([],['flag'=>"DESC"])
        ]);
    }
	
	/**
	 * @Route("/partenaires", name="app_showbiz_partenaires")
	 */
	public function partenaire()
	{
		return $this->render('showbiz_home/partenaires.html.twig');
	}
	
	/**
	 * @Route("/rubrique/droite", name="app_showbiz_rubrique_droite")
	 */
	public function rubrique()
	{
		return $this->render('showbiz_home/rubrique_droite.html.twig');
	}
	
	/**
	 * @Route("/cover/page/secondaire", name="app_showbiz_cover_page")
	 */
	public function cover()
	{
		return $this->render('showbiz_home/cover.html.twig');
	}
}
