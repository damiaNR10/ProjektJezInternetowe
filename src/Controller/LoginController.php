<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class LoginController extends AbstractController
{
    /**
     * @Route("/login", name="login")
     */
    public function indexAction()
    {
      return $this->render('login/index.html.twig',[
        'controller_name' => "LoginController"
      ]);
    }
}
