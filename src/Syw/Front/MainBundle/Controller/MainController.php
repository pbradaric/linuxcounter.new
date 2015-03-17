<?php

namespace Syw\Front\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class MainController extends Controller
{
    /**
     * @Route("/")
     * @Method("GET")
     *
     * @Template()
     */
    public function indexAction()
    {
        return array();
    }

    /**
     * @Route("/contact")
     * @Method("GET")
     *
     * @Template()
     */
    public function contactAction()
    {
        return array();
    }

    /**
     * @Route("/about")
     * @Method("GET")
     *
     * @Template()
     */
    public function aboutAction()
    {
        return array();
    }
}
