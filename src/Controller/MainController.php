<?php

namespace App\Controller;

use App\Repository\TestRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    #[Route('/', name: 'app_main')]
    public function index(TestRepository $tr): Response
    {

        return $this->render('main/index.html.twig', [
            'controller_name' => 'MainController',
            'test' => $tr->find(1)
        ]);
    }
}
