<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/inicio.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/inicio", name="inicio")
     */
    public function inicioAction()
    {
        
    return $this->render('default/inicio.html.twig');

    }

    /**
     * @Route("/sobre_nosotros", name="sobre_nosotros")
     */
    public function sobre_nosotrosAction()
    {
        
    return $this->render('default/sobre_nosotros.html.twig');


    }


     /**
     * @Route("/contacto", name="contacto")
     */
    public function contactoAction()
    {
        
    return $this->render('default/contacto.html.twig');


    }

     /**
     * @Route("/donde_estamos", name="donde_estamos")
     */
    public function donde_estamosAction()
    {
        
    return $this->render('default/donde_estamos.html.twig');


    }

}


