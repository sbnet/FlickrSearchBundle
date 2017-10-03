<?php

namespace Sbnet\FlickrSearchBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SbnetFlickrSearchBundle:Default:index.html.twig');
    }
}
