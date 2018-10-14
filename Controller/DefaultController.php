<?php

namespace Inwebo\BookmarksBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('InweboBookmarksBundle:Default:index.html.twig');
    }
}
