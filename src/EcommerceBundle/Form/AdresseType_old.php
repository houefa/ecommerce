<?php

namespace EcommerceBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AdresseType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('quartier','entity', array('class' => 'EcommerceBundle\Entity\Quartier',
                                        'property'  => 'nom'))
                ->add('complement');
        //->add('creele')
        //->add('modifiele')
        // ->add('fournisseur')
        // ->add('utilisateur')
        // ->add('livreur')
        //->add('quartier','entity', array('class' => 'EcommerceBundle\Entity\Quartier' ));
        //->add('utilisateurs','entity', array('class' => 'UtilisateursBundle\Entity\Utilisateurs' ))
        // ->add('ville','entity', array('class' => 'EcommerceBundle\Entity\Ville',
        //                                 'property'  => 'nom'))
        // ->add('commune','entity', array('class' => 'EcommerceBundle\Entity\Commune',
        //                                 'property'  => 'nom'))
        
        
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'EcommerceBundle\Entity\Adresse'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'ecommercebundle_adresse';
    }


}
