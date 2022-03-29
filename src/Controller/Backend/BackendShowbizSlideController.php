<?php

namespace App\Controller\Backend;

use App\Entity\ShowbizSlide;
use App\Form\ShowbizSlideType;
use App\Repository\ShowbizSlideRepository;
use App\Utilities\GestionMedia;
use App\Utilities\Utility;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/backend-showbiz-slide")
 */
class BackendShowbizSlideController extends AbstractController
{
	const menu = "showbiz";
	const sub_menu = "slider";
	
	private $utility;
	private $gestionMedia;
	
	public function __construct(Utility $utility, GestionMedia $gestionMedia)
	{
		$this->utility = $utility;
		$this->gestionMedia = $gestionMedia;
	}
	
    /**
     * @Route("/", name="app_backend_showbiz_slide_index", methods={"GET"})
     */
    public function index(ShowbizSlideRepository $showbizSlideRepository): Response
    {
        return $this->render('backend_showbiz_slide/index.html.twig', [
            'showbiz_slides' => $showbizSlideRepository->findAll(),
	        'menu' => self::menu,
	        'sub_menu' => self::sub_menu
        ]);
    }

    /**
     * @Route("/new", name="app_backend_showbiz_slide_new", methods={"GET", "POST"})
     */
    public function new(Request $request, ShowbizSlideRepository $showbizSlideRepository): Response
    {
        $showbizSlide = new ShowbizSlide();
        $form = $this->createForm(ShowbizSlideType::class, $showbizSlide);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
	
	
	        if ($form->get('media')->getData()) $mediaFile = $form->get('media')->getData();
	        else $mediaFile=null;
	
	        $showbizSlide = $this->gestionMedia->entity($showbizSlide, 'slide', $mediaFile);
			
            $showbizSlideRepository->add($showbizSlide);
	
	        $this->addFlash('success', "Le slide ". $showbizSlide->getTitre()." a bien été enregistré");
			
            return $this->redirectToRoute('app_backend_showbiz_slide_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('backend_showbiz_slide/new.html.twig', [
            'showbiz_slide' => $showbizSlide,
            'form' => $form,
	        'menu' => self::menu,
	        'sub_menu' => self::sub_menu,
        ]);
    }

    /**
     * @Route("/{id}", name="app_backend_showbiz_slide_show", methods={"GET"})
     */
    public function show(ShowbizSlide $showbizSlide): Response
    {
        return $this->render('backend_showbiz_slide/show.html.twig', [
            'showbiz_slide' => $showbizSlide,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_backend_showbiz_slide_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, ShowbizSlide $showbizSlide, ShowbizSlideRepository $showbizSlideRepository): Response
    {
        $form = $this->createForm(ShowbizSlideType::class, $showbizSlide);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
	
	        if ($form->get('media')->getData()) $mediaFile = $form->get('media')->getData();
	        else $mediaFile=null;
	
	        $showbizSlide = $this->gestionMedia->entity($showbizSlide, 'slide', $mediaFile);
			
            $showbizSlideRepository->add($showbizSlide);
	
	        $this->addFlash('success', "Le slide ". $showbizSlide->getTitre()." a bien été modifié");
			
            return $this->redirectToRoute('app_backend_showbiz_slide_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('backend_showbiz_slide/edit.html.twig', [
            'showbiz_slide' => $showbizSlide,
            'form' => $form,
	        'menu' => self::menu,
	        'sub_menu' => self::sub_menu,
        ]);
    }

    /**
     * @Route("/{id}", name="app_backend_showbiz_slide_delete", methods={"POST"})
     */
    public function delete(Request $request, ShowbizSlide $showbizSlide, ShowbizSlideRepository $showbizSlideRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$showbizSlide->getId(), $request->request->get('_token'))) {
            $showbizSlideRepository->remove($showbizSlide);
        }

        return $this->redirectToRoute('app_backend_showbiz_slide_index', [], Response::HTTP_SEE_OTHER);
    }
}
