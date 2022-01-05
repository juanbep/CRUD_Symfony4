<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Controller;


use App\Entity\Article;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\HttpFoundation\Request;
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
    
    
    /**
    * @Route ("/article/new", name="new_article")
    * Method ({"GET", "POST"})
    */
    public function new(Request $request){
        $article = new Article();

        $form = $this->createFormBuilder($article)
        ->add('title', TextType::class, array('attr' =>array('class' => 'form-control')))
        ->add('body', TextareaType::class, array('required' =>false,
          'attr' =>array('class' =>'form-control')))
        ->add('save', SubmitType::class, array(
          'label' =>'Crear',
          'attr' =>array('class'=>'btn btn-primary mt-3')
        ))
        ->getForm();

        return $this->render('articles/new.html.twig',array(
          'form'=>$form->createView()
  ));
}
    
    
    

}
