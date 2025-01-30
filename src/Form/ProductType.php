<?php

namespace App\Form;

use App\Entity\Product;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class ProductType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, array("attr" => ['label' => 'Nom', "class" => "border-red-500 border-4"]))
            ->add('category', TextType::class, ['label' => 'Catégorie'])
            ->add('description', TextareaType::class, ['label' => 'Description'])
            ->add('image', FileType::class, [
                'label' => 'Image (PNG, JPG, JPEG, GIF)',
                'mapped' => false, // Not mapped to the entity because it's a file input
                'required' => false,
                'attr' => [
                    'accept' => 'image/*', // This is the correct way to add the accept attribute
                ],
            ]);
            
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Product::class,
        ]);
    }
}
