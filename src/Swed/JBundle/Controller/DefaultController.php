<?php

namespace Swed\JBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SwedJBundle:Bank:index.html.twig');
    }
    public function businessAction()
    {
        return $this->render('SwedJBundle:Bank:business.html.twig');
    }
    public function mapAction()
    {
        return $this->render('SwedJBundle:Bank:map.html.twig');
    }
}
