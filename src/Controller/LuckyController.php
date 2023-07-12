<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LuckyController extends AbstractController
{
    #[Route('/main', name: 'app_lucky_number ')]
    public function number(): Response
    {
        $number = random_int(0, 100);

        return $this->render('/main.html.twig', [
            'number' => $number,
        ]);
    }

    #[Route('/blog', name: 'app_lucky_list ')]
    public function list(): Response
    {
        return $this->render('/blog.html.twig', [
            'list' => "Hello, niggers!",
        ]);
    }
}