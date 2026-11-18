<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class Ejercicio1Controller extends AbstractController
{
    #[Route('/triple/{numero}', name: 'app_ejercicio1_triple', requirements: ['numero'=>'\d+'])]
    public function tripe(int $numero): Response
    {
        $resultado = $numero*3;
        $operacion="El triple de ";
        return $this->render('ejercicio1/index.html.twig', [
            'controller_name' => 'Ejercicio1Controller',
            'numero' => $numero,
            'resultado' => $resultado,
            'operacion' => $operacion,
        ]);
    }
    #[Route('/division/{a}/{b}', name: 'app_ejercicio1_division', requirements: ['a'=>'\d+', 'b'=>'\d+'])]
    public function division(int $a, int $b): Response
    {
        $resultado = $a/$b;
        $numero = "$a y  $b";
        $operacion="El division de ";
        return $this->render('ejercicio1/index.html.twig', [
            'controller_name' => 'Ejercicio1Controller',
            'numero' => $numero,
            'resultado' => $resultado,
            'operacion' => $operacion,
        ]);
    }

    #[Route('/potencia/{base}/{exponente?3}', name: 'app_ejercicio1_potencia', requirements: ['base'=>'\d+', 'exponente'=>'\d+'])]
    public function potencia(int $base, int $exponente): Response
    {
        $resultado = $base**$exponente;
        $numero = "$base con exponente $exponente es ";
        $operacion="El potencia de ";
        return $this->render('ejercicio1/index.html.twig', [
            'controller_name' => 'Ejercicio1Controller',
            'numero' => $numero,
            'resultado' => $resultado,
            'operacion' => $operacion,
        ]);
    }
}
