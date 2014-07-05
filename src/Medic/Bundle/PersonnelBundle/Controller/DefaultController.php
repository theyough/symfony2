<?php

namespace Medic\Bundle\PersonnelBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
//use Medic\Bundle\PersonnelBundle\Entity\Personnel;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     * @Template()
     */
    public function indexAction()
    {
        $repository = $this->getDoctrine()->getRepository('MedicPersonnelBundle:Personnel');
        $personnels = $repository->findAll();
        return $personnels;
    }
}
