<?php
	
	namespace App\Controller\Frontend;
	
	use App\Entity\ShowbizArtiste;
	use App\Repository\ShowbizAlbumRepository;
	use App\Repository\ShowbizArtisteRepository;
	use Container3SlcJnZ\PaginatorInterface_82dac15;
	use Doctrine\Persistence\ManagerRegistry;
	use Knp\Component\Pager\PaginatorInterface;
	use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
	use Symfony\Component\HttpFoundation\Request;
	use Symfony\Component\HttpFoundation\Response;
	use Symfony\Component\Routing\Annotation\Route;
	
	/**
	 * @Route("/showbiz/label")
	 */
	class ShowbizArtisteController extends AbstractController
	{
		private $artisteRepository;
		private $paginator;
		
		public function __construct(ShowbizArtisteRepository $artisteRepository, PaginatorInterface $paginator)
		{
			$this->artisteRepository = $artisteRepository;
			$this->paginator = $paginator;
		}
		
		/**
		 * @Route("/", name="app_showbiz_label", methods={"GET","POST"})
		 */
		public function index(Request $request): Response
		{
			$search = $request->get('btnfiltre');
			
			if ($search) $donnees = $this->artisteRepository->findByPaginator($search);
			else $donnees = $this->artisteRepository->findByPaginator();
			//dd($donnees);
			$artistes = $this->paginator->paginate(
				$donnees,
				$request->query->getInt('page', 1),
				12
			);
			
			return $this->render('showbiz/label_artistes_liste.html.twig',[
				'artistes' => $artistes,
			]);
		}
		
		/**
		 * @Route("/{slug}", name="app_showbiz_label_artiste_show", methods={"GET"})
		 */
		public function artiste(ShowbizArtiste $artiste, ShowbizAlbumRepository $albumRepository): Response
		{
			return $this->render('showbiz/label_artiste_show.html.twig',[
				'artiste' => $artiste,
				'albums' => $albumRepository->findBy(['artiste'=>$artiste->getId()])
			]);
		}
	}
