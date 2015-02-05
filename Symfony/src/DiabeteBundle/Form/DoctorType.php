<?php

namespace DiabeteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

use Doctrine\ORM\EntityRepository;

class DoctorType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        	->add('gender', 'choice', array(
										'choices'   => array('0' => 'Masculin', '1' => 'Féminin'),
										'label'  => 'Sexe', 
			))
			->add('lastname', 'text', array('label'  => 'Nom'))
			->add('firstname', 'text', array('label'  => 'Prénom'))
			->add('birthday', 'birthday', array(
											'widget' => 'choice',
											'format' => 'dd-MM-yyyy',
											'label' => 'Date de naissance'
			))
			->add('address', 'textarea', array('label'  => 'Adresse'))
			->add('postalCode', 'text', array('label'  => 'Code postal'))
			->add('city', 'text', array('label'  => 'Ville'))
			->add('phone', 'text', array('label'  => 'Tel. Cabinet'))
			->add('cellPhone', 'text', array('label'  => 'Tel. Portable'));

    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'DiabeteBundle\Entity\Doctor',
        ));
    }

    public function getName()
    {
        return 'doctor';
    }
}
