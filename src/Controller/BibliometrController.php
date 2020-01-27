<?php

namespace App\Controller;

use App\Entity\Article;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer;
use Symfony\Component\Serializer\Encoder\JsonEncoder;


class BibliometrController extends AbstractController {

    /**
     * @Route("/", name="app_home")
     */
    public function index(Request $request)
    {
        $articles = $this->getDoctrine()
            ->getRepository(Article::class)
            ->findAll();

        return $this->render('home.html.twig', [
            'articles' => $articles,
        ]);
    }

    
    /**
     * @Route("/api", name="app_api")
     */
    public function api(Request $request)
    {
        $articles = $this->getDoctrine()
            ->getRepository(Article::class)
            ->findAll();

        $ser = new Serializer([new GetSetMethodNormalizer()], [
            'json' => new JsonEncoder()
        ]);
        return new Response($ser->serialize($articles, 'json'));
    }
}
