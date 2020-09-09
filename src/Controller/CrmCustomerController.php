<?php

namespace App\Controller;

use App\Entity\CrmCustomer;
use App\Form\CrmCustomerType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CrmCustomerController extends AbstractController
{
    /**
     * @Route("/crm/customer", name="crm_customer")
     */
    public function index()
    {
        return $this->render('crm_customer/index.html.twig', [
            'controller_name' => 'CrmCustomerController',
        ]);
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/crm/customer/new" ,name="new_customer")
     */

    public function create(){
        $crmCustomer=new CrmCustomer();
        $crmCustomerForm=$this->createForm(CrmCustomerType::class,$crmCustomer);

        return $this->render('crm_customer/create.html.twig',[

            'crmCustomer'=>$crmCustomerForm->createView()
        ]);


    }
}
