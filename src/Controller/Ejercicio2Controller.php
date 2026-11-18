<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class Ejercicio2Controller extends AbstractController
{
    #[Route('/pedido/{id}', name: 'app_detalle_pedido', requirements: ['id' => '\d+'])]
    public function index(int $id): Response
    {
        return $this->render('ejercicio2/index.html.twig', [
            'controller_name' => 'Ejercicio2Controller',
            'id' => $id,
        ]);
    }

    #[Route('/pedido/nuevo', name: 'app_pedido_nuevo')]
    public function nuevo(): Response
    {
        return new Response('<html><body><h1>Introduzca el nuevo pedido que desees</h1></body></html>');
    }
}
