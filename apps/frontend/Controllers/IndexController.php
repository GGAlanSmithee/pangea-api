<?php

namespace Pangea\Frontend\Controllers;

class IndexController extends ControllerBase
{
    public function indexAction()
    {
        $auth = $this->session->get("auth");
        $this->view->userIsLoggedIn = isset($auth);
    }
}
