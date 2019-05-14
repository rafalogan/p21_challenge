<?php

namespace App\Form;

use App\Entity\Fans;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FanType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, ['label' => 'Nome:'])
            ->add('document', NumberType::class, ['label' => 'Documento:'])
            ->add('zip_conde', NumberType::class, ['label' => 'CEP:'])
            ->add('address', TextType::class, ['label' => 'Endereço:'])
            ->add('district', TextType::class, ['label' => 'Bairro:'])
            ->add('city', TextType::class, ['label' => 'Cidade:'])
            ->add('state', TextType::class, ['label' => 'Estado:'])
            ->add('phone', NumberType::class, ['label' => 'Telefone:'])
            ->add('email', EmailType::class, ['label' => 'E-mail:'])
            ->add('status', CheckboxType::class, ['label' => 'Ativo:'])
        ;
    }

    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults([
            'data_class' => Fans::class,
        ]);
    }
}
