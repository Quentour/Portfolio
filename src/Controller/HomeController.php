<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\UserRepository;
use App\Repository\SkillRepository;


class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(UserRepository $user, SkillRepository $skills)
    {
        return $this->render('home/index.html.twig', [
            'user' => $user->findOneBy(["id" => 1]),
            'skills' => $skills->findAll()
        ]);
    }
}
