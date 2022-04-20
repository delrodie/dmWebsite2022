<?php
	
	namespace App\Controller\Frontend;
	
	use App\Entity\ShowbizAlbum;
	use App\Repository\ShowbizAlbumRepository;
	use App\Repository\ShowbizArtisteRepository;
	use Knp\Component\Pager\PaginatorInterface;
	use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
	use Symfony\Component\HttpFoundation\Request;
	use Symfony\Component\Routing\Annotation\Route;
	
	/**
	 * @Route("/showbiz/album")
	 */
	class ShowbizAlbumController extends AbstractController
	{
		private $albumRepository;
		private $paginator;
		private $artisteRepository;
		
		public function __construct(ShowbizAlbumRepository $albumRepository, ShowbizArtisteRepository $artisteRepository, PaginatorInterface $paginator)
		{
			$this->albumRepository = $albumRepository;
			$this->paginator = $paginator;
			$this->artisteRepository = $artisteRepository;
		}
		
		/**
		 * @Route("/", name="app_showbiz_album", methods={"GET","POST"})
		 */
		public function index(Request $request)
		{
			$search = $request->get('btnfiltre');
			
			if ($search) $donnees = $this->albumRepository->findListOrderByFlagArtiste($search);
			else $donnees = $this->albumRepository->findListOrderByFlagArtiste();
			
			$albums = $this->paginator->paginate(
				$donnees,
				$request->query->getInt('page', 1),
				12
			);
			
			return $this->render('showbiz/label_album_liste.html.twig',[
				'albums' => $albums
			]);
		}
		
		/**
		 * @Route("/{slug}", name="app_showbiz_album_show", methods={"GET","POST"})
		 */
		public function show(ShowbizAlbum $album)
		{
			
			return $this->render('showbiz/label_album_show.html.twig',[
				'album' => $album,
				'similaires' => $this->albumRepository->findByGenre($album->getArtiste()->getGenre(), $album->getId()),
				'albums' => $this->albumRepository->findAutreAlbumArtiste($album->getId(), $album->getArtiste()->getId())
			]);
		}
	}
