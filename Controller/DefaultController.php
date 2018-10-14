<?php

namespace Inwebo\BookmarksBundle_\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('InweboBookmarksBundle:Default:index.html.twig');
    }
}
