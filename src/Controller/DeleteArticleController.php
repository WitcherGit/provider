<?php

namespace App\Controller;

use App\Entity\Article;
use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DeleteArticleController extends AbstractController {

    /**
     * @Route("/delete_article/{id}", name="app_delete_article")
     */
    public function deleteArticle(int $id)
    {
        $article = $this->getDoctrine()->getManager()->getRepository(Article::class)
        -> find( $id );

        if (!$article) {
            echo "Nie ma artykułu o id " . $id . "!!!";
            exit;
        }

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($article);
        $entityManager->flush();

        return $this->redirectToRoute('app_home');
    }
}
