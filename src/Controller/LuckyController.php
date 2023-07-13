<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LuckyController extends AbstractController
{
    #[Route('/number', name: 'app_number ')]
    public function number(): Response
    {
        $number = random_int(0, 100);

        return $this->render('/number.html.twig', [
            'number' => $number,
        ]);
    }

    #[Route('/greetings', name: 'app_greetings ')]
    public function greetings(): Response
    {
        return $this->render('/greetings.html.twig');
    }

    #[Route('/hedge', name: 'app_hedge ')]
    public function hedge(): Response
    {
        return $this->render('/hedge.html.twig');
    }
}