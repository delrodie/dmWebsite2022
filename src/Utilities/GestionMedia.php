<?php
	
	namespace App\Utilities;
	
	use Symfony\Component\HttpFoundation\File\Exception\FileException;
	use Symfony\Component\HttpFoundation\File\UploadedFile;
	use Symfony\Component\String\Slugger\AsciiSlugger;
	
	class GestionMedia
	{
		private $mediaPresentation;
		private $mediaSlide;
		private $mediaService;
		private $mediaArtiste;
		private $mediaAlbum;
		private $mediaPublicite;
		
		public function __construct($presentationDirectory, $slideDirectory, $serviceDirectory, $artisteDirectory, $albumDirectory,
			$publiciteDirectory
		)
		{
			$this->mediaPresentation = $presentationDirectory;
			$this->mediaSlide = $slideDirectory;
			$this->mediaService = $serviceDirectory;
			$this->mediaArtiste = $artisteDirectory;
			$this->mediaAlbum = $albumDirectory;
			$this->mediaPublicite = $publiciteDirectory;
		}
		
		public function entity($entity, $entityName, $mediaFile =  null)
		{
			$slugger = new AsciiSlugger();
			
			
			if ($entityName !== 'slide'){
				if ($entityName === 'artiste') {
					$entity->setResume(substr(strip_tags($entity->getBiographie()), 0, 155));
					$entity->setSlug($slugger->slug(strtolower($entity->getNom())));
				}elseif($entityName !== 'publicite') {
					$entity->setResume(substr(strip_tags($entity->getContenu()), 0, 155));
					$entity->setSlug($slugger->slug(strtolower($entity->getTitre())));
				}else{
					$entity->setSlug($slugger->slug(strtolower($entity->getTitre())));
				}
			}else{
				$entity->setSlug($slugger->slug(strtolower($entity->getTitre())));
			}
			
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
				elseif ($media === 'service') $file->move($this->mediaService, $newFilename);
				elseif ($media === 'artiste') $file->move($this->mediaArtiste, $newFilename);
				elseif ($media === 'album') $file->move($this->mediaAlbum, $newFilename);
				elseif ($media === 'publicite') $file->move($this->mediaPublicite, $newFilename);
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
			elseif ($media === 'service') unlink($this->mediaService.'/'.$ancienMedia);
			elseif ($media === 'artiste') unlink($this->mediaArtiste.'/'.$ancienMedia);
			elseif ($media === 'album') unlink($this->mediaAlbum.'/'.$ancienMedia);
			elseif ($media === 'publicite') unlink($this->mediaPublicite.'/'.$ancienMedia);
			else return false;
			
			return true;
		}
	}
