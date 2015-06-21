<?php

namespace Api\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * @Route("/api")
 */
class MainController extends Controller
{
    /**
     * @Route(
     *      "/pangcaicai.{_format}",
     *      name="pangcaicai",
     *      defaults={"_format"="json"},
     *      requirements={"_format"="json"}
     * )
     */
    public function pangcaicaiAction($_format)
    {
        return $this->render('Api:main:pangcaicai.' . $_format . '.twig');
    }
}
