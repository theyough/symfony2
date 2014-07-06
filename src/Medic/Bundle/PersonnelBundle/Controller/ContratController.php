<?php

namespace Medic\Bundle\PersonnelBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use Medic\Bundle\PersonnelBundle\Entity\Contrat;
use Medic\Bundle\PersonnelBundle\Form\Type\ContratType;

class ContratController extends Controller
{
    /**
     * @Route("/contrat", name="contrat_home")
     * @Template()
     */
    public function indexAction()
    {
        $repository = $this->getDoctrine()->getRepository('MedicPersonnelBundle:Contrat');
        $contrats = $repository->findAll();
        return array('contrats' => $contrats);
    }

    /**
     * @Route("/contrat/new")
     * @Template()
     */
    public function newAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $form = $this->createForm(new ContratType(),new Contrat());
        $form->handleRequest($request);

        if ($form->isValid()) {
            $contrat = $form->getData();
            $em->persist($contrat);
            $em->flush();

            return $this->redirect($this->generateUrl('contrat_home'));

        }
        return array('form' => $form->createView());
    }

}
