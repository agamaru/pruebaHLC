<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ServicioController extends Controller
{
    /**
     * @Route("/servicios", name="servicios_listado")
     */
    public function listadoAction()
    {
        $servicios = [
            ['titulo' => 'Título uno', 'descripcion' => 'Descripción uno', 'autor' => 'Alonso Quijano', 'fecha_publicacion' => new \DateTime('2017-12-05')],
            ['titulo' => 'Título dos', 'descripcion' => 'Descripción dos', 'autor' => 'Sancho Panza', 'fecha_publicacion' => new \DateTime('2017-12-06')],
            ['titulo' => 'Título tres', 'descripcion' => 'Descripción tres', 'autor' => 'Dulcinea del Toboso', 'fecha_publicacion' => new \DateTime('2017-12-07')],
            ['titulo' => 'Título cuatro', 'descripcion' => 'Descripción cuatro', 'autor' => 'Ginés de Pasamonte', 'fecha_publicacion' => new \DateTime('2017-12-08')]
        ];

        return $this->render('servicio/listado.html.twig', [
            'servicios' => $servicios
        ]);
    }
}
