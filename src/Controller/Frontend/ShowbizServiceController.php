<?php
	
	namespace App\Controller\Frontend;
	
	use App\Entity\ShowbizService;
	use App\Repository\ShowbizServiceRepository;
	use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
	use Symfony\Component\HttpFoundation\Response;
	use Symfony\Component\Routing\Annotation\Route;
	
	/**
	 * @Route("/showbiz/services")
	 */
	class ShowbizServiceController extends AbstractController
	{
		/**
		 * @Route("/", name="app_showbiz_service_index")
		 */
		public function index(ShowbizServiceRepository $serviceRepository)
		{
			return $this->render('showbiz/service_index.html.twig',[
				'services' => $serviceRepository->findAll()
			]);
		}
		
		/**
		 * @Route("/{slug}", name="app_showbiz_service_show", methods={"GET"})
		 */
		public function show(ShowbizService $service)
		{
			return $this->render('showbiz/service_show.html.twig',[
				'service' => $service,
			]);
		}
		
		/**
		 * @Route("/menu/1", name="app_showbiz_service_menu")
		 */
		public function menu(ShowbizServiceRepository $serviceRepository): Response
		{
			return $this->render('showbiz/service_menu.html.twig',[
				'services' => $serviceRepository->findAll()
			]);
		}
	}
