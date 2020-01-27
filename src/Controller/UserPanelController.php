<?php

namespace App\Controller;

use App\Entity\Article;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class UserPanelController extends AbstractController {

    /**
     * @Route("/user_panel", name="user_panel")
     */
    public function index(Request $request) {
        return $this->render('userPanel.html.twig');
    }
}
