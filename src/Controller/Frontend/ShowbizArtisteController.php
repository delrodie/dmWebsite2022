<?php
	
	namespace App\Controller\Frontend;
	
	use App\Entity\ShowbizArtiste;
	use App\Repository\ShowbizArtisteRepository;
	use Doctrine\Persistence\ManagerRegistry;
	use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
	use Symfony\Component\HttpFoundation\Response;
	use Symfony\Component\Routing\Annotation\Route;
	
	/**
	 * @Route("/showbiz/label")
	 */
	class ShowbizArtisteController extends AbstractController
	{
		private $artisteRepository;
		
		public function __construct(ShowbizArtisteRepository $artisteRepository)
		{
			$this->artisteRepository = $artisteRepository;
		}
		
		/**
		 * @Route("/", name="app_showbiz_label")
		 */
		public function index(): Response
		{
			return $this->render('showbiz/label_artistes_liste.html.twig',[
				'artistes' =>$this->artisteRepository->findBy([], ["flag"=>"DESC"])
			]);
		}
		
		/**
		 * @Route("/{slug}", name="app_showbiz_label_artiste_show", methods={"GET"})
		 */
		public function artiste(ShowbizArtiste $artiste): Response
		{
			return $this->render('showbiz/label_artiste_show.html.twig',[
				'artiste' => $artiste,
				'albums' => true
			]);
		}
	}
