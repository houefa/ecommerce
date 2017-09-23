<?php

namespace EcommerceBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use EcommerceBundle\Form\MediaType;

class ProduitType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('libelle')
                ->add('description')
                ->add('disponible', 'checkbox')
                ->add('poids')
                ->add('qte')
                ->add('avenir')
                ->add('prix')
                //->add('creele')
                //->add('modifiele')
                ->add('image', new MediaType())
                ->add('categorie')->add('unitemesure')
                //->add('creepar')
                ->add('Valider','submit');
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'EcommerceBundle\Entity\Produit'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'ecommercebundle_produit';
    }


}
