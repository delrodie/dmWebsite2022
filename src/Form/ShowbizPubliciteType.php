<?php

namespace App\Form;

use App\Entity\ShowbizPublicite;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\File;

class ShowbizPubliciteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('titre', TextType::class,[
	            'attr' => ['class'=>'form-control', 'placeholder'=>"", 'autocomplete'=>"off"],
	            'label' => "Titre du slide"
            ])
            ->add('media', FileType::class,[
	            'attr'=>['class'=>"dropify", 'data-preview' => ".preview"],
	            'label' => "Télécharger le slide",
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
            ->add('statut', CheckboxType::class,[
	            'attr' => ['class'=>'custom-control-input'],
	            'label_attr' => ['class'=>'custom-control-label'],
	            'required' => false
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => ShowbizPublicite::class,
        ]);
    }
}
