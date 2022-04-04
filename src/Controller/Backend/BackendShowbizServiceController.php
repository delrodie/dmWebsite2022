<?php

namespace App\Controller\Backend;

use App\Entity\ShowbizService;
use App\Form\ShowbizServiceType;
use App\Repository\ShowbizServiceRepository;
use App\Utilities\GestionMedia;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/backend/showbiz/service")
 */
class BackendShowbizServiceController extends AbstractController
{
	const menu = "showbiz";
	const sub_menu = "service";
	
	private $gestionMedia;
	
	public function __construct(GestionMedia $gestionMedia)
	{
		$this->gestionMedia = $gestionMedia;
	}
	
    /**
     * @Route("/", name="app_backend_showbiz_service_index", methods={"GET"})
     */
    public function index(ShowbizServiceRepository $showbizServiceRepository): Response
    {
        return $this->render('backend_showbiz_service/index.html.twig', [
            'showbiz_services' => $showbizServiceRepository->findAll(),
	        'menu' => self::menu,
	        'sub_menu' => self::sub_menu
        ]);
    }

    /**
     * @Route("/new", name="app_backend_showbiz_service_new", methods={"GET", "POST"})
     */
    public function new(Request $request, ShowbizServiceRepository $showbizServiceRepository): Response
    {
        $showbizService = new ShowbizService();
        $form = $this->createForm(ShowbizServiceType::class, $showbizService);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
	
	        if ($form->get('media')->getData()) $mediaFile = $form->get('media')->getData();
	        else $mediaFile=null;
	
	        $showbizService = $this->gestionMedia->entity($showbizService, 'service', $mediaFile);
			
            $showbizServiceRepository->add($showbizService);
	
	        $this->addFlash('success', "Le service ". $showbizService->getTitre()." a bien été enregistré");
			
            return $this->redirectToRoute('app_backend_showbiz_service_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('backend_showbiz_service/new.html.twig', [
            'showbiz_service' => $showbizService,
            'form' => $form,
	        'menu' => self::menu,
	        'sub_menu' => self::sub_menu
        ]);
    }

    /**
     * @Route("/{id}", name="app_backend_showbiz_service_show", methods={"GET"})
     */
    public function show(ShowbizService $showbizService): Response
    {
        return $this->render('backend_showbiz_service/show.html.twig', [
            'showbiz_service' => $showbizService,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_backend_showbiz_service_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, ShowbizService $showbizService, ShowbizServiceRepository $showbizServiceRepository): Response
    {
        $form = $this->createForm(ShowbizServiceType::class, $showbizService);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
	
	        if ($form->get('media')->getData()) $mediaFile = $form->get('media')->getData();
	        else $mediaFile=null;
	
	        $showbizPresentation = $this->gestionMedia->entity($showbizService, 'service', $mediaFile);
			
            $showbizServiceRepository->add($showbizService);
	
	        $this->addFlash('success', "Le service ". $showbizService->getTitre()." a bien été modifié");
			
            return $this->redirectToRoute('app_backend_showbiz_service_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('backend_showbiz_service/edit.html.twig', [
            'showbiz_service' => $showbizService,
            'form' => $form,
	        'menu' => self::menu,
	        'sub_menu' => self::sub_menu
        ]);
    }

    /**
     * @Route("/{id}", name="app_backend_showbiz_service_delete", methods={"POST"})
     */
    public function delete(Request $request, ShowbizService $showbizService, ShowbizServiceRepository $showbizServiceRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$showbizService->getId(), $request->request->get('_token'))) {
            $showbizServiceRepository->remove($showbizService);
        }

        return $this->redirectToRoute('app_backend_showbiz_service_index', [], Response::HTTP_SEE_OTHER);
    }
}
