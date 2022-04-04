<?php

namespace App\Controller\Backend;

use App\Entity\ShowbizPresentation;
use App\Form\ShowbizPresentationType;
use App\Repository\ShowbizPresentationRepository;
use App\Utilities\GestionMedia;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/backend/showbiz/presentation")
 */
class BackendShowbizPresentationController extends AbstractController
{
	const menu = "showbiz";
	const sub_menu = "presentation";
	
	private $gestionMedia;
	
	public function __construct(GestionMedia $gestionMedia)
	{
		$this->gestionMedia = $gestionMedia;
	}
	
    /**
     * @Route("/", name="app_backend_showbiz_presentation_index", methods={"GET"})
     */
    public function index(ShowbizPresentationRepository $showbizPresentationRepository): Response
    {
		$presentation = $showbizPresentationRepository->findOneBy([],['id'=>"ASC"]);
		if (!$presentation){
			return $this->redirectToRoute('app_backend_showbiz_presentation_new', [], Response::HTTP_SEE_OTHER);
		}else{
			return $this->redirectToRoute('app_backend_showbiz_presentation_show', [
				'id' => $presentation->getId()
			], Response::HTTP_SEE_OTHER);
		}
    }

    /**
     * @Route("/new", name="app_backend_showbiz_presentation_new", methods={"GET", "POST"})
     */
    public function new(Request $request, ShowbizPresentationRepository $showbizPresentationRepository): Response
    {
        $showbizPresentation = new ShowbizPresentation();
        $form = $this->createForm(ShowbizPresentationType::class, $showbizPresentation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
	
	        if ($form->get('media')->getData()) $mediaFile = $form->get('media')->getData();
	        else $mediaFile=null;
	
	        $showbizPresentation = $this->gestionMedia->entity($showbizPresentation, 'presentation', $mediaFile);
			
            $showbizPresentationRepository->add($showbizPresentation);
	
	        $this->addFlash('success', "La présentation ". $showbizPresentation->getTitre()." a bien été enregistrée");
			
            return $this->redirectToRoute('app_backend_showbiz_presentation_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('backend_showbiz_presentation/new.html.twig', [
            'showbiz_presentation' => $showbizPresentation,
            'form' => $form,
	        'menu' => self::menu,
	        'sub_menu' => self::sub_menu
        ]);
    }

    /**
     * @Route("/{id}", name="app_backend_showbiz_presentation_show", methods={"GET"})
     */
    public function show(ShowbizPresentation $showbizPresentation): Response
    {
        return $this->render('backend_showbiz_presentation/show.html.twig', [
            'showbiz_presentation' => $showbizPresentation,
	        'menu' => self::menu,
	        'sub_menu' => self::sub_menu
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_backend_showbiz_presentation_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, ShowbizPresentation $showbizPresentation, ShowbizPresentationRepository $showbizPresentationRepository): Response
    {
        $form = $this->createForm(ShowbizPresentationType::class, $showbizPresentation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
	
	        if ($form->get('media')->getData()) $mediaFile = $form->get('media')->getData();
	        else $mediaFile=null;
	
	        $showbizPresentation = $this->gestionMedia->entity($showbizPresentation, 'presentation', $mediaFile);
			
            $showbizPresentationRepository->add($showbizPresentation);
	
	        $this->addFlash('success', "La présentation ". $showbizPresentation->getTitre()." a bien été modifiée");
			
            return $this->redirectToRoute('app_backend_showbiz_presentation_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('backend_showbiz_presentation/edit.html.twig', [
            'showbiz_presentation' => $showbizPresentation,
            'form' => $form,
	        'menu' => self::menu,
	        'sub_menu' => self::sub_menu
        ]);
    }

    /**
     * @Route("/{id}", name="app_backend_showbiz_presentation_delete", methods={"POST"})
     */
    public function delete(Request $request, ShowbizPresentation $showbizPresentation, ShowbizPresentationRepository $showbizPresentationRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$showbizPresentation->getId(), $request->request->get('_token'))) {
            $showbizPresentationRepository->remove($showbizPresentation);
			
			if ($showbizPresentation->getMedia()){
				$this->gestionMedia->removeUpload($showbizPresentation->getMedia(), 'presentation');
			}
        }

        return $this->redirectToRoute('app_backend_showbiz_presentation_index', [], Response::HTTP_SEE_OTHER);
    }
}
