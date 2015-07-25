<?php

namespace App\Controller;

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

    /**
     * @Route("/jiiis", name="jiiis")
     */
    public function jiiisAction()
    {
        return $this->redirectToRoute('jibagong', ['hobby' => 'basketball']);
    }

    /**
     * @Route("/example-404", name="example_404")
     */
    public function error404Action()
    {
        throw $this->createNotFoundException('A 404 example page.');
    }

    /**
     * @Route("/example-500", name="example_500")
     */
    public function error500Action()
    {
        throw new \Exception('A 500 example page.');
    }
}
