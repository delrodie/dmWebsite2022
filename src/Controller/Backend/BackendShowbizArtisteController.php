<?php

namespace App\Controller\Backend;

use App\Entity\ShowbizArtiste;
use App\Form\ShowbizArtisteType;
use App\Repository\ShowbizArtisteRepository;
use App\Utilities\GestionMedia;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/backend/showbiz/artiste")
 */
class BackendShowbizArtisteController extends AbstractController
{
	const menu = "showbiz";
	const sub_menu = "label";
	
	private $gestionMedia;
	
	public function __construct(GestionMedia $gestionMedia)
	{
		$this->gestionMedia = $gestionMedia;
	}
	
    /**
     * @Route("/", name="app_backend_showbiz_artiste_index", methods={"GET"})
     */
    public function index(ShowbizArtisteRepository $showbizArtisteRepository): Response
    {
        return $this->render('backend_showbiz_artiste/index.html.twig', [
            'showbiz_artistes' => $showbizArtisteRepository->findAll(),
	        'menu' => self::menu,
	        'sub_menu' => self::sub_menu
        ]);
    }

    /**
     * @Route("/new", name="app_backend_showbiz_artiste_new", methods={"GET", "POST"})
     */
    public function new(Request $request, ShowbizArtisteRepository $showbizArtisteRepository): Response
    {
        $showbizArtiste = new ShowbizArtiste();
        $form = $this->createForm(ShowbizArtisteType::class, $showbizArtiste);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
	
	        if ($form->get('media')->getData()) $mediaFile = $form->get('media')->getData();
	        else $mediaFile=null;
	
	        $showbizArtiste = $this->gestionMedia->entity($showbizArtiste, 'artiste', $mediaFile);
	
            $showbizArtisteRepository->add($showbizArtiste);
	
	        $this->addFlash('success', "L'artiste ". $showbizArtiste->getNom()." a bien été enregistré");
			
            return $this->redirectToRoute('app_backend_showbiz_artiste_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('backend_showbiz_artiste/new.html.twig', [
            'showbiz_artiste' => $showbizArtiste,
            'form' => $form,
	        'menu' => self::menu,
	        'sub_menu' => self::sub_menu
        ]);
    }

    /**
     * @Route("/{id}", name="app_backend_showbiz_artiste_show", methods={"GET"})
     */
    public function show(ShowbizArtiste $showbizArtiste): Response
    {
        return $this->render('backend_showbiz_artiste/show.html.twig', [
            'showbiz_artiste' => $showbizArtiste,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_backend_showbiz_artiste_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, ShowbizArtiste $showbizArtiste, ShowbizArtisteRepository $showbizArtisteRepository): Response
    {
        $form = $this->createForm(ShowbizArtisteType::class, $showbizArtiste);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
	
	        if ($form->get('media')->getData()) $mediaFile = $form->get('media')->getData();
	        else $mediaFile=null;
	
	        $showbizArtiste = $this->gestionMedia->entity($showbizArtiste, 'artiste', $mediaFile);
			
            $showbizArtisteRepository->add($showbizArtiste);
	
	        $this->addFlash('success', "L'artiste ". $showbizArtiste->getNom()." a bien été modifié");
			
            return $this->redirectToRoute('app_backend_showbiz_artiste_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('backend_showbiz_artiste/edit.html.twig', [
            'showbiz_artiste' => $showbizArtiste,
            'form' => $form,
	        'menu' => self::menu,
	        'sub_menu' => self::sub_menu
        ]);
    }

    /**
     * @Route("/{id}", name="app_backend_showbiz_artiste_delete", methods={"POST"})
     */
    public function delete(Request $request, ShowbizArtiste $showbizArtiste, ShowbizArtisteRepository $showbizArtisteRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$showbizArtiste->getId(), $request->request->get('_token'))) {
            $showbizArtisteRepository->remove($showbizArtiste);
        }

        return $this->redirectToRoute('app_backend_showbiz_artiste_index', [], Response::HTTP_SEE_OTHER);
    }
}
