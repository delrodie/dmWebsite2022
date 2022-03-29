<?php
	
	namespace App\Utilities;
	
	use Symfony\Component\HttpFoundation\File\Exception\FileException;
	use Symfony\Component\HttpFoundation\File\UploadedFile;
	use Symfony\Component\String\Slugger\AsciiSlugger;
	
	class GestionMedia
	{
		private $mediaPresentation;
		private $mediaSlide;
		
		public function __construct($presentationDirectory, $slideDirectory
		)
		{
			$this->mediaPresentation = $presentationDirectory;
			$this->mediaSlide = $slideDirectory;
		}
		
		public function entity($entity, $entityName, $mediaFile =  null)
		{
			$slugger = new AsciiSlugger();
			
			$entity->setSlug($slugger->slug($entity->getTitre()));
			if ($entityName !== 'slide')
				$entity->setResume(substr(strip_tags($entity->getContenu()), 0, 155));
			
			// Gestion des medias
			if ($mediaFile){
				$media = $this->upload($mediaFile, $entityName); //dd($activite->getLogo());
				
				// Supression de l'ancien fichier
				if ($entity->getMedia())
					$this->removeUpload($entity->getMedia(), $entityName);
				
				$entity->setMedia($media);
			}
			
			return $entity;
			
		}
		
		/**
		 * Enregistrement du fichier dans le repertoire approprié
		 *
		 * @param UploadedFile $file
		 * @param null $media
		 * @return string
		 */
		public function upload(UploadedFile $file, $media = null): string
		{
			// Initialisation du slug
			$slugify = new AsciiSlugger();
			
			
			$originalFileName = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
			$safeFilename = $slugify->slug($originalFileName);
			$newFilename = $safeFilename.'-'.Time().'.'.$file->guessExtension(); //dd($this->mediaActivite);
			
			// Deplacement du fichier dans le repertoire dedié
			try {
				if ($media === 'presentation') $file->move($this->mediaPresentation, $newFilename);
				elseif ($media === 'slide') $file->move($this->mediaSlide, $newFilename);
				else $file->move($this->mediaPresentation, $newFilename);
			}catch (FileException $e){
			
			}
			
			return $newFilename;
		}
		
		/**
		 * Suppression de l'ancien media sur le server
		 *
		 * @param $ancienMedia
		 * @param null $media
		 * @return bool
		 */
		public function removeUpload($ancienMedia, $media = null): bool
		{
			if ($media === 'presentation') unlink($this->mediaPresentation.'/'.$ancienMedia);
			elseif ($media === 'slide') unlink($this->mediaSlide.'/'.$ancienMedia);
			else return false;
			
			return true;
		}
	}
