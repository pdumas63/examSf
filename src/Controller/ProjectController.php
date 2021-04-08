<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProjectController extends AbstractController
{
    /**
     * @Route("/project", name="project")
     */
    public function index(): Response
    {
        return $this->render('project/index.html.twig', [
            'controller_name' => 'ProjectController',
        ]);
    }
    /**
     * @Route("/project", name="projects_list")
     */
    public function index(ProjectRepository $projectRepository): Response
    {
        $projects = $projectRepository->findAll();

        return $this->render('project/liste.html.twig', [
            'projects' => $projects
        ]);
    }
}
