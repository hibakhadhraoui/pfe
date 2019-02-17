<?php

namespace App\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


/**
 * @Route("/admin")
 */

class DashboardAdminController extends AbstractController
{
    /**
     * @Route("/dashboard", name="dashboard_admin")
     */
    public function index()
    {
        return $this->render('dashboard_admin/index.html.twig', [
            'controller_name' => 'DashboardAdminController',
        ]);
    }
}
