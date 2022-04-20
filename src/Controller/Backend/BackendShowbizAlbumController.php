<?php

namespace App\Controller\Backend;

use App\Entity\ShowbizAlbum;
use App\Form\ShowbizAlbumType;
use App\Repository\ShowbizAlbumRepository;
use App\Utilities\GestionMedia;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/backend/showbiz/album")
 */
class BackendShowbizAlbumController extends AbstractController
{
	const menu = "showbiz";
	const sub_menu = "label";
	
	private $gestionMedia;
	
	public function __construct(GestionMedia $gestionMedia)
	{
		$this->gestionMedia = $gestionMedia;
	}
    /**
     * @Route("/", name="app_backend_showbiz_album_index", methods={"GET"})
     */
    public function index(ShowbizAlbumRepository $showbizAlbumRepository): Response
    {
        return $this->render('backend_showbiz_album/index.html.twig', [
            'showbiz_albums' => $showbizAlbumRepository->findAll(),
	        'menu' => self::menu,
	        'sub_menu' => self::sub_menu
        ]);
    }

    /**
     * @Route("/new", name="app_backend_showbiz_album_new", methods={"GET", "POST"})
     */
    public function new(Request $request, ShowbizAlbumRepository $showbizAlbumRepository): Response
    {
        $showbizAlbum = new ShowbizAlbum();
        $form = $this->createForm(ShowbizAlbumType::class, $showbizAlbum);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
	        if ($form->get('media')->getData()) $mediaFile = $form->get('media')->getData();
	        else $mediaFile=null;
	
	        $showbizAlbum = $this->gestionMedia->entity($showbizAlbum, 'album', $mediaFile);
			
            $showbizAlbumRepository->add($showbizAlbum);
	
	        $this->addFlash('success', "L'album ". $showbizAlbum->getTitre()." a bien été enregistré");
			
            return $this->redirectToRoute('app_backend_showbiz_album_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('backend_showbiz_album/new.html.twig', [
            'showbiz_album' => $showbizAlbum,
            'form' => $form,
	        'menu' => self::menu,
	        'sub_menu' => self::sub_menu
        ]);
    }

    /**
     * @Route("/{id}", name="app_backend_showbiz_album_show", methods={"GET"})
     */
    public function show(ShowbizAlbum $showbizAlbum): Response
    {
        return $this->render('backend_showbiz_album/show.html.twig', [
            'showbiz_album' => $showbizAlbum,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_backend_showbiz_album_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, ShowbizAlbum $showbizAlbum, ShowbizAlbumRepository $showbizAlbumRepository): Response
    {
        $form = $this->createForm(ShowbizAlbumType::class, $showbizAlbum);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
	        if ($form->get('media')->getData()) $mediaFile = $form->get('media')->getData();
	        else $mediaFile=null;
	
	        $showbizAlbum = $this->gestionMedia->entity($showbizAlbum, 'album', $mediaFile);
			
            $showbizAlbumRepository->add($showbizAlbum);
            return $this->redirectToRoute('app_backend_showbiz_album_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('backend_showbiz_album/edit.html.twig', [
            'showbiz_album' => $showbizAlbum,
            'form' => $form,
	        'menu' => self::menu,
	        'sub_menu' => self::sub_menu
        ]);
    }

    /**
     * @Route("/{id}", name="app_backend_showbiz_album_delete", methods={"POST"})
     */
    public function delete(Request $request, ShowbizAlbum $showbizAlbum, ShowbizAlbumRepository $showbizAlbumRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$showbizAlbum->getId(), $request->request->get('_token'))) {
            $showbizAlbumRepository->remove($showbizAlbum);
			
			$this->gestionMedia->removeUpload($showbizAlbum->getMedia(), 'album');
        }

        return $this->redirectToRoute('app_backend_showbiz_album_index', [], Response::HTTP_SEE_OTHER);
    }
}
