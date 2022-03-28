<?php
	
	namespace App\Utilities;
	
	use App\Entity\User;
	use App\Repository\UserRepository;
	use Doctrine\Persistence\ManagerRegistry;
	use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
	use Symfony\Component\Security\Core\Security;
	
	class GestionSecurity
	{
		private $managerRegistry;
		private $passwordHasher;
		private $userRepository;
		private $security;
		
		public function __construct(ManagerRegistry $managerRegistry, UserPasswordHasherInterface $passwordHasher, Security $security, UserRepository $userRepository)
		{
			$this->managerRegistry = $managerRegistry;
			$this->passwordHasher = $passwordHasher;
			$this->userRepository = $userRepository;
			$this->security = $security;
		}
		
		/**
		 * @return bool
		 */
		public function initalisationUser(): bool
		{
			$entityManager = $this->managerRegistry->getManager();
			
			$user = New User();
			$user->setEmail('delrodieamoikon@gmail.com');
			$user->setPassword($this->passwordHasher->hashPassword($user, 'dreammaker225'));
			$user->setRoles(['ROLE_SUPER_ADMIN']);
			
			$entityManager->persist($user);
			$entityManager->flush();
			
			return true;
		}
		
		/**
		 * @return bool
		 */
		public function connexion(): bool
		{
			$entityManager = $this->managerRegistry->getManager();
			
			$user = $this->userRepository->findOneBy(['email'=> $this->security->getUser()->getUserIdentifier()]);
			
			$nombre_connexion = (int) $user->getConnexion();
			$user->setConnexion($nombre_connexion+1);
			$user->setLastconnectedAt(new \DateTime());
			
			$entityManager->flush();
			
			return true;
		}
	}
