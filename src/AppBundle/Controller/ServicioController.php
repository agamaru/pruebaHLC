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
        return $this->render('servicio/listado.html.twig');
    }
}
