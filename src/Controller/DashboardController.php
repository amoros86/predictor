<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DashboardController extends AbstractController
{
    public function index()
    {
        $text = "ESTO SERA EL INDICE";
        return $this->render(
            'Dashboard/index.html.twig',
            [
                'text' => $text,
            ]
        );
    }
}
