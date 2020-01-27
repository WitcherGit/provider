<?php

namespace App\Controller;

use App\Entity\Article;
use App\Entity\User;
use App\Form\ArticleType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

use Symfony\Component\Security\Core\Security;

class ArticleController extends AbstractController {
    /**
     * @Route("/add_article", name="app_add_article")
     */
    public function addArticle(Request $request, Security $security)
    {
        $article = new Article();
        $form = $this->createForm(ArticleType::class, $article);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $article->setUserId($security->getUser()->getId());

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($article);
            $entityManager->flush();

            return $this->redirectToRoute('app_home');
        }

        return $this->render('article/add_article.html.twig',
            ['form' => $form->createView()]
        );
    }

    /**
     * @Route("/edit_article/{id}", name="app_edit_article")
     */
    public function editArticle(Request $request, int $id)
    {
        $article = $this->getDoctrine()
            ->getRepository(Article::class)
            ->find($id);

        if(!$article) {
            echo "Nie ma takiego artykułu!";
            exit;
        }

        $form = $this->createForm(ArticleType::class, $article);

        // 2) handle the submit (will only happen on POST)
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            // 4) save the User!
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($article);
            $entityManager->flush();

            return $this->redirectToRoute('app_home');
        }

        return $this->render(
            'article/add_article.html.twig',
            ['form' => $form->createView()]
        );
    }
}
