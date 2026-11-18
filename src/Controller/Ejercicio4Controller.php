<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/tienda-online')]
final class Ejercicio4Controller extends AbstractController
{
    public function listadoPedidos():array
    {
        $pedidos=[
            1=>['nombre'=>'Pedido 1', 'cantidad'=>1, 'estado'=>'pendiente'],
            2=>['nombre'=>'Pedido 2', 'cantidad'=>2, 'estado'=>'entregado'],
            3=>['nombre'=>'Pedido 3', 'cantidad'=>3, 'estado'=>'enviado'],
            4=>['nombre'=>'Pedido 4', 'cantidad'=>4, 'estado'=>'pendiente'],
        ];
        return $pedidos;
    }

    #[Route('/pedidos/{id}', name: 'detallePedido', requirements: ['id'=>'\d+'])]
    public function detallePedido(int $id):Response
    {
        $pedidos=$this->listadoPedidos();
        return $this->render("ejercicio4/detallePedido.html.twig", [
            'pedidos' => $pedidos[$id],
            'id' => $id,
        ]);
    }

    #[Route('/pedidos', name: 'pedidos')]
    public function pedidos():Response
    {
        $pedidos=$this->listadoPedidos();
        return $this->render("ejercicio4/pedidos.html.twig", [
            'pedidos' => $pedidos,
        ]);
    }

    #[Route('/pedidos/estado/{nombre}', name: 'app_ejercicio4_filtrado')]
    public function filtrado(String $nombre): Response
    {
        $pedidosFiltrados=[];
        $pedidos=$this->listadoPedidos();
        foreach ($pedidos as $id => $pedido) {
            if ($pedido['estado'] === $nombre) {
                $pedidosFiltrados[$id] = $pedido;
            }
        }
        return $this->render('ejercicio4/pedidos.html.twig', [
            'controller_name' => 'Ejercicio4Controller',
            'pedidos' => $pedidosFiltrados,
        ]);
    }
}
