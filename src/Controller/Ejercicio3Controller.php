<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class Ejercicio3Controller extends AbstractController
{
    #[Route('/cuenta/{valor}', name: 'app_ejercicio3', requirements: ['valor' => '\d+'])]
    public function cuenta(int $valor): Response
    {
        return $this->redirectToRoute('app_detalle_pedido', ['id' => $valor]);
    }
    #[Route('/ayuda', name: 'app_ejercicio3_ayuda')]
    public function ayuda(): Response
    {
        return $this->redirect("https://www.php.net/manual/es/index.php");
    }
}
