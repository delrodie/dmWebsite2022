<?php

namespace App\Controller\Backend;

use App\Entity\ShowbizPublicite;
use App\Form\ShowbizPubliciteType;
use App\Repository\ShowbizPubliciteRepository;
use App\Utilities\GestionMedia;
use App\Utilities\Utility;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/backend/showbiz/publicite")
 */
class BackendShowbizPubliciteController extends AbstractController
{
	const menu = "showbiz";
	const sub_menu = "publicite";
	
	private $gestionMedia;
	
	public function __construct(Utility $utility, GestionMedia $gestionMedia)
	{
		$this->gestionMedia = $gestionMedia;
	}
	
    /**
     * @Route("/", name="app_backend_showbiz_publicite_index", methods={"GET"})
     */
    public function index(ShowbizPubliciteRepository $showbizPubliciteRepository): Response
    {
        return $this->render('backend_showbiz_publicite/index.html.twig', [
            'showbiz_publicites' => $showbizPubliciteRepository->findAll(),
	        'menu' => self::menu,
	        'sub_menu' => self::sub_menu
        ]);
    }

    /**
     * @Route("/new", name="app_backend_showbiz_publicite_new", methods={"GET", "POST"})
     */
    public function new(Request $request, ShowbizPubliciteRepository $showbizPubliciteRepository): Response
    {
        $showbizPublicite = new ShowbizPublicite();
        $form = $this->createForm(ShowbizPubliciteType::class, $showbizPublicite);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
	
	        if ($form->get('media')->getData()) $mediaFile = $form->get('media')->getData();
	        else $mediaFile=null;
	
	        $showbizPublicite = $this->gestionMedia->entity($showbizPublicite, 'publicite', $mediaFile);
			
            $showbizPubliciteRepository->add($showbizPublicite);
	
	        $this->addFlash('success', "La publicité ". $showbizPublicite->getTitre()." a bien été enregistrée");
			
            return $this->redirectToRoute('app_backend_showbiz_publicite_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('backend_showbiz_publicite/new.html.twig', [
            'showbiz_publicite' => $showbizPublicite,
            'form' => $form,
	        'menu' => self::menu,
	        'sub_menu' => self::sub_menu
        ]);
    }

    /**
     * @Route("/{id}", name="app_backend_showbiz_publicite_show", methods={"GET"})
     */
    public function show(ShowbizPublicite $showbizPublicite): Response
    {
        return $this->render('backend_showbiz_publicite/show.html.twig', [
            'showbiz_publicite' => $showbizPublicite,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_backend_showbiz_publicite_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, ShowbizPublicite $showbizPublicite, ShowbizPubliciteRepository $showbizPubliciteRepository): Response
    {
        $form = $this->createForm(ShowbizPubliciteType::class, $showbizPublicite);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
	
	        if ($form->get('media')->getData()) $mediaFile = $form->get('media')->getData();
	        else $mediaFile=null;
	
	        $showbizPublicite = $this->gestionMedia->entity($showbizPublicite, 'publicite', $mediaFile);
			
            $showbizPubliciteRepository->add($showbizPublicite);
	
	        $this->addFlash('success', "La publicité ". $showbizPublicite->getTitre()." a bien été modifiée");
			
            return $this->redirectToRoute('app_backend_showbiz_publicite_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('backend_showbiz_publicite/edit.html.twig', [
            'showbiz_publicite' => $showbizPublicite,
            'form' => $form,
	        'menu' => self::menu,
	        'sub_menu' => self::sub_menu
        ]);
    }

    /**
     * @Route("/{id}", name="app_backend_showbiz_publicite_delete", methods={"POST"})
     */
    public function delete(Request $request, ShowbizPublicite $showbizPublicite, ShowbizPubliciteRepository $showbizPubliciteRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$showbizPublicite->getId(), $request->request->get('_token'))) {
            $showbizPubliciteRepository->remove($showbizPublicite);
			
			$this->gestionMedia->removeUpload($showbizPublicite->getMedia(), 'publicite');
        }

        return $this->redirectToRoute('app_backend_showbiz_publicite_index', [], Response::HTTP_SEE_OTHER);
    }
}
