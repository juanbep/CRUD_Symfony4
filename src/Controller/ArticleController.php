<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Description of ArticleController
 *
 * @author Beca98
 */
class ArticleController extends AbstractController {
    //put your code here
    /**
   * @Route("/article", name="article")
   */
    public function article(){
    $articles = ['Article 1','Article 2','Article 3','Article 4'];
    
    return $this->render('articles/index.html.twig', array
      ('articles' => $articles));
    }

}
