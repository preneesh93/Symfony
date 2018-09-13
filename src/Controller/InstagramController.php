<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class InstagramController extends Controller
{
    /**
     * @Route("/instagram", name="instagram")
     */
    public function index()
    {
        return $this->render('instagram/insta.html.twig', [
            'controller_name' => 'InstagramController',
        ]);
    }
}
