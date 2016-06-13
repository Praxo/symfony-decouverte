<?php

namespace BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ArticleController extends Controller
{
    public function indexAction()
    {
        return $this->render('BlogBundle:Article:articles.html.twig');
    }
    public function displayAction($title)
    {
        return $this->render('BlogBundle:Article:article.html.twig', ["title"=>$title]);
    }
}