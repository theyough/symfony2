<?php
namespace Medic\Bundle\PersonnelBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PersonnelType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nom');
        $builder->add('prenom');
        $builder->add('type_contrat','entity',array(
            'class' => 'MedicPersonnelBundle:Personnel',
            'property' => 'type_contrat'
        ));
        $builder->add('date_naissance','date');
        $builder->add('enfant');
        $builder->add('adresse');
        $builder->add('ville');
        $builder->add('code_postal');
        $builder->add('tel_fixe');
        $builder->add('tel_mobile');
        $builder->add('poste');
        $builder->add('fumeur');
        $builder->add('save', 'submit');
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Medic\Bundle\PersonnelBundle\Entity\Personnel'
        ));
    }

    public function getName()
    {
        return('personnel');
    }
}