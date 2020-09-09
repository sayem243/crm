<?php

namespace App\Controller;

use App\Entity\CrmCustomer;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
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
     * @param Request $request
     */

    public function create(Request $request){
        $crmCustomer=new CrmCustomer();
        $crmCustomerForm=$this->createForm();


    }
}
