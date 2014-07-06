<?php

namespace Medic\Bundle\PersonnelBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use Medic\Bundle\PersonnelBundle\Entity\Personnel;
use Medic\Bundle\PersonnelBundle\Form\Type\PersonnelType;

class DefaultController extends Controller
{
    /**
     * @Route("/personnel", name="personnel_home")
     * @Template()
     */
    public function indexAction()
    {
        $repository = $this->getDoctrine()->getRepository('MedicPersonnelBundle:Personnel');
        $personnels = $repository->findAll();
        return array('personnels' => $personnels);
    }

    /**
     * @Route("/personnel/new")
     * @Template()
     */
    public function newAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $form = $this->createForm(new PersonnelType(),new Personnel());
        $form->handleRequest($request);

        if ($form->isValid()) {
            $personnel = $form->getData();
            $em->persist($personnel);
            $em->flush();

            return $this->redirect($this->generateUrl('personnel_home'));

        }
        return array('form' => $form->createView());
    }
}