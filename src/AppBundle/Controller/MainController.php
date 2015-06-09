<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MainController extends Controller
{
    /**
     * @Route("/", name="home")
     * @Template()
     */
    public function indexAction()
    {
        return [];
    }

    /**
     * @Route("/erniuniu", name="erniuniu")
     * @Template()
     */
    public function erniuniuAction()
    {
        return [];
    }

    /**
     * @Route("/jibaGong/{hobby}", name="jibagong")
     * @Template()
     */
    public function jibagongAction($hobby)
    {
        return compact('hobby');
    }
}
