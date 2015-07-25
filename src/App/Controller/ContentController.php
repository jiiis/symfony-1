<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ContentController extends Controller
{
    /**
     * @Template()
     */
    public function bottomAction()
    {
        return [];
    }

    /**
     * @Route("test-session/{session_name}/{session_value}", name="test_session")
     * @Template()
     */
    public function testSessionAction(Request $request, $session_name, $session_value)
    {
        $session = $request->getSession();
        $session->set($session_name, $session_value);

        return compact('session_name', 'session_value');
    }
}
