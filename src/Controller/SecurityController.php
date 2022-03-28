<?php

namespace App\Controller;

use App\Repository\UserRepository;
use App\Utilities\GestionSecurity;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends AbstractController
{
	private $_security;
	private $userRepository;
	
	public function __construct(GestionSecurity $_security, UserRepository $userRepository)
	{
		$this->_security = $_security;
		$this->userRepository = $userRepository;
	}
	
    /**
     * @Route("/login", name="app_login")
     */
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
	    $verif = $this->userRepository->findOneBy(['email'=>'delrodieamoikon@gmail.com']);
	    if (!$verif){
		    $this->_security->initalisationUser();
		    $this->addFlash('success', "Compte utilisateur 'dreammaker225' initialisé avec succès");
	    }
		
        // if ($this->getUser()) {
        //     return $this->redirectToRoute('target_path');
        // }

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('security/login.html.twig', ['last_username' => $lastUsername, 'error' => $error]);
    }

    /**
     * @Route("/logout", name="app_logout")
     */
    public function logout(): void
    {
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }
}
