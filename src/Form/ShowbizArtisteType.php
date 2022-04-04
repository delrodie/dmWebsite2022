<?php

namespace App\Form;

use App\Entity\ShowbizArtiste;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\File;

class ShowbizArtisteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', TextType::class,[
	            'attr'=>['class'=>"form-control", 'placeholder'=>"Nom de l'artiste", 'autocomplete'=>"off"],
	            'label' => "Nom"
            ])
            ->add('biographie')
            //->add('resume')
            ->add('manager', TextType::class,[
	            'attr'=>['class'=>"form-control", 'placeholder'=>"Contact du Manager", 'autocomplete'=>"off"],
	            'label' => "Contact Manager",
	            'required' => false
            ])
            ->add('email', EmailType::class,[
	            'attr'=>['class'=>"form-control", 'placeholder'=>"Adresse Email", 'autocomplete'=>"off"],
	            'label' => "Adresse Email",
	            'required' => false
            ])
            ->add('website', UrlType::class,[
	            'attr'=>['class'=>"form-control", 'placeholder'=>"Lien du site internet ", 'autocomplete'=>"off"],
	            'label' => "Site internet",
	            'required' => false
            ])
            ->add('youtube', UrlType::class,[
	            'attr'=>['class'=>"form-control", 'placeholder'=>"Lien chaine youtube", 'autocomplete'=>"off"],
	            'label' => "Chaine Youtube",
	            'required' => false
            ])
            ->add('facebook', UrlType::class,[
	            'attr'=>['class'=>"form-control", 'placeholder'=>"Lien du compte Facebook", 'autocomplete'=>"off"],
	            'label' => "Compte Facebook",
	            'required' => false
            ])
            ->add('instagram', UrlType::class,[
	            'attr'=>['class'=>"form-control", 'placeholder'=>"Lien du compte Instagram", 'autocomplete'=>"off"],
	            'label' => "Compte Instagram",
	            'required' => false
            ])
            ->add('twitter', UrlType::class,[
	            'attr'=>['class'=>"form-control", 'placeholder'=>"Lien du compte twitter", 'autocomplete'=>"off"],
	            'label' => "Compte Twitter",
	            'required' => false
            ])
            ->add('genre', TextType::class,[
	            'attr' => ['class'=>'form-control', 'placeholder'=>"Genres musicaux", 'data-role'=>"tagsinput"],
	            'label'=>"Genre"
            ])
            ->add('flag', ChoiceType::class,[
				'attr'=>['class'=>'form-control'],
	            'choices' => [
					1 => 1,
		            2 => 2,
		            3 => 3,
		            4 => 4,
		            5 => 5
	            ]
            ])
            ->add('media', FileType::class,[
	            'attr'=>['class'=>"dropify", 'data-preview' => ".preview"],
	            'label' => "Télécharger la photo",
	            'mapped' => false,
	            'multiple' => false,
	            'constraints' => [
		            new File([
			            'maxSize' => "1000000k",
			            'mimeTypes' =>[
				            'image/png',
				            'image/jpeg',
				            'image/jpg',
				            'image/gif',
				            'image/webp',
			            ],
			            'mimeTypesMessage' => "Votre fichier doit être de type image"
		            ])
	            ],
	            'required' => true
            ])
            //->add('slug')
            //->add('createdAt')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => ShowbizArtiste::class,
        ]);
    }
}
