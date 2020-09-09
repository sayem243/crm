<?php

namespace App\Form;

use App\Entity\CrmCustomer;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CrmCustomerType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('mobile')
            ->add('address')
            ->add('customer_group')
            ->add('agentId')
            ->add('sub_agent_id')
            ->add('location')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => CrmCustomer::class,
        ]);
    }
}
