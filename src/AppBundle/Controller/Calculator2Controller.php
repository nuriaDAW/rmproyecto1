<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Description of CalculatorController2
 *
 * @author nur
 */
class Calculator2Controller extends Controller {
    public function indexAction($age){
        $currentYear = date('Y');
        $year = $currentYear - $age;
        
        return $this -> render('calculator/index.html.twig', array('year' => $year));
    }
}
