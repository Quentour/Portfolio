<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\UserRepository;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(UserRepository $user)
    {
        return $this->render('home/index.html.twig', [
            'user' => $user->findOneBy(["id" => 1])
        ]);
    }
}
