<?php

namespace Api\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

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

    /**
     * @Route(
     *      "/test-request.{_format}",
     *      name="test_request",
     *      defaults={"_format"="json"},
     *      requirements={"_format"="json"}
     * )
     * @Template()
     */
    public function testRequestAction(Request $request)
    {
        return [
            'info' => [
                'is_xhr' => $request->isXmlHttpRequest(),
                'query_p1' => $request->query->get('p1')
            ]
        ];
    }
}
