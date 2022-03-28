<?php

namespace App\Controller;

use App\Form\ChangePasswordType;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/change-password")
 */
class ChangePasswordController extends AbstractController
{
    /**
     * @Route("/", name="app_change_password", methods={"GET","POST"})
     */
    public function index(Request $request, UserRepository $userRepository, UserPasswordHasherInterface $passwordHasher): Response
    {
	    $form = $this->createForm(ChangePasswordType::class);
	    $form->handleRequest($request);
	
	    if ($form->isSubmitted() && $form->isValid()) {
		    $user = $this->getUser(); //dd($user);
		    $password = $passwordHasher->hashPassword(
			    $user,
			    //$user->getPassword(),
			    $form->get('password')->getData()
		    );
		    $userRepository->upgradePassword($user, $password);
		
		    $this->addFlash('success', "Votre mot de passe à bien été modifié");
		
		    return $this->redirectToRoute('app_logout', [], Response::HTTP_SEE_OTHER);
	    }
		
        return $this->render('change_password/index.html.twig', [
	        'resetForm' => $form->createView(),
        ]);
    }
}
