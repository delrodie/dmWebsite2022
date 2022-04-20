<?php

namespace App\Form;

use App\Entity\ShowbizAlbum;
use App\Entity\ShowbizArtiste;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\File;

class ShowbizAlbumType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('type', ChoiceType::class,[
				'attr'=>['class'=>'form-control', 'autocomplete'=>"off"],
	            'choices' => [
		            'Album' => 'ALBUM',
		            'Single' => 'SINGLE'
	            ],
	            'label' => "Type *"
            ])
            ->add('mode', ChoiceType::class,[
				'attr' => ['class'=>'form-control', 'autocomplete'=>'off'],
	            'choices' => [
					'Distribution' => "DISTRIBUTION",
		            'Production' => 'PRODUCTION'
	            ],
	            'label' => 'Mode *'
            ])
            ->add('titre', TextType::class,['attr'=>['class'=>'form-control', 'autocomplete'=>'off', 'placeholder'=>"Titre de l'album"],
	            'label' => 'Titre *',
            ])
            ->add('contenu',null,[
				'required' => false,
	            'label' => "Presentation de l'album / single"
            ])
            //->add('resume')
            ->add('piste', TextType::class,['attr'=>['class'=>'form-control', 'autocomplete'=>'off', 'placeholder'=>"Nombre de piste"],
	            'label' => 'Nombre de pistes *',
            ])
            ->add('compositeur', TextType::class,['attr'=>['class'=>'form-control', 'autocomplete'=>'off', 'placeholder'=>"Nom du compositeur", 'data-role'=>"tagsinput"],
	            'required' => false,
	            'label' => "Compositeur"
            ])
            ->add('choeurs', TextType::class,['attr'=>['class'=>'form-control', 'autocomplete'=>'off', 'placeholder'=>"Noms des mebres du coeur", 'data-role'=>"tagsinput"],
	            'required' => false
            ])
            ->add('arrangeur', TextType::class,['attr'=>['class'=>'form-control', 'autocomplete'=>'off', 'placeholder'=>"Nom de l'arrangeur", 'data-role'=>"tagsinput"],
	            'required' => false
            ])
            ->add('producteur', TextType::class,['attr'=>['class'=>'form-control', 'autocomplete'=>'off', 'placeholder'=>"Nom du producteur", 'data-role'=>"tagsinput"],
	            'required' => false
            ])
            ->add('mixage', TextType::class,['attr'=>['class'=>'form-control', 'autocomplete'=>'off', 'placeholder'=>"Mixage", 'data-role'=>"tagsinput"],
	            'required' => false
            ])
            ->add('master', TextType::class,['attr'=>['class'=>'form-control', 'autocomplete'=>'off', 'placeholder'=>"Master", 'data-role'=>"tagsinput"],
	            'required' => false
            ])
            ->add('spotify', TextType::class,['attr'=>['class'=>'form-control', 'autocomplete'=>'off', 'placeholder'=>"Lien Spotify"],
	            'required' => false
            ])
            ->add('deezer', TextType::class,['attr'=>['class'=>'form-control', 'autocomplete'=>'off', 'placeholder'=>"Lien Deezer"],
	            'required' => false
            ])
            ->add('itunes', TextType::class,['attr'=>['class'=>'form-control', 'autocomplete'=>'off', 'placeholder'=>"Lien itunes"],
	            'required' => false
            ])
            ->add('amazon', TextType::class,['attr'=>['class'=>'form-control', 'autocomplete'=>'off', 'placeholder'=>"Lien Amazon Music"],
	            'required' => false
            ])
            ->add('youtube', TextType::class,['attr'=>['class'=>'form-control', 'autocomplete'=>'off', 'placeholder'=>"Lien youtube"],
	            'required' => false
            ])
            ->add('media', FileType::class,[
	            'attr'=>['class'=>"dropify", 'data-preview' => ".preview"],
	            'label' => "Télécharger la cover *",
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
	            'required' => false
            ])
            //->add('slug')
            //->add('createdAt')
            ->add('artiste', EntityType::class,[
				'attr' => ['class' => 'form-control select2'],
				'class'=>ShowbizArtiste::class,
	            'query_builder' => function(EntityRepository $er){
					return $er->createQueryBuilder('sa')
						->orderBy('sa.nom', 'ASC');
	            },
	            'choice_label' => 'nom'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => ShowbizAlbum::class,
        ]);
    }
}
