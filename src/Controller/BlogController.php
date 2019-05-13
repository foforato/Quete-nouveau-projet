<?php
// src/Controller/BlogController.php
namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    /**
     * @Route("/blog",
     *     name="blog_index"
     * )
     */

    public function index()
    {
        return $this->render('blog/index.html.twig', [
            'owner' => 'Aymane',
        ]);
    }

    /**
     * @Route("/blog/show/{article}",
     *     name="blog_show"
     * )
     */

    public function show($article = ' ')
    {
        if ($article == ' ') {
            $slug = "L'article est vide";
        } else {
            $slug = ucwords(str_replace('-', ' ', $article));
        }

        return $this->render('blog/show.html.twig', [
            'article' => $slug
        ]);
    }
}

