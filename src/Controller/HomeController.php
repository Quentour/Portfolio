<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\UserRepository;
use App\Repository\SkillRepository;
use App\Repository\ProjectsRepository;
use App\Entity\Projects;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function home(UserRepository $user, SkillRepository $skills)
    {
        return $this->render('home/index.html.twig', [
            'user' => $user->findOneBy(["id" => 1]),
            'skills' => $skills->findAll()
        ]);
    }

    /**
     * @Route("/projects", name="home_projects", methods={"GET"})
     */
    public function projectsIndex(ProjectsRepository $projectsRepository): Response
    {
        return $this->render('home/projects.html.twig', [
            'projects' => $projectsRepository->findAll(),
        ]);
    }

    /**
     * @Route("/projects/{id}", name="home_show", methods={"GET"})
     */
    public function show(Projects $project): Response
    {
        return $this->render('home/projectShow.html.twig', [
            'project' => $project,
        ]);
    }

}
