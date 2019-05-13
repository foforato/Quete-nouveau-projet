<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/default",
     *     name="default_index"
     * )
     */
    public function index()
    {
        return $this->render('default/default.html.twig');
    }
}