<?php

namespace Acme\AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class LinkType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', null, [
	            'label' => 'Nom',
	            'required' => true,
	            'help_label' => 'Texte d\'aide'
            ])
            ->add('category', null, [
	            'label' => 'Catégorie'
            ])
            ->add('author', null, [
	            'label' => 'Auteur'
            ])
            ->add('url', null, ['label' => 'Lien'])
            ->add('createdAt', DateType::class, [
	            'label' => 'Crée le',
            ])
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Acme\AppBundle\Entity\Link'
        ));
    }
}
