<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response; 
use App\Entity\Product;

class ProductController extends AbstractController
{
    /**
     * @Route("/product", name="product")
     */
    public function index()
    {
        return $this->render('product/index.html.twig', [
            'controller_name' => 'ProductController',
        ]);
    }

    /**
     * @Route("/api/users", name="users")
     */
    public function getUsers()
    {
        
        $em=$this->getDoctrine()->getManager();
        $users=$em->getRepository(Product::class)->findBy(array());
        $response = new Response();

        $response->headers->set('Content-Type', 'application/json');
        $response->headers->set('Access-Control-Allow-Origin', '*');

        $response->setContent(json_encode($users));
        
        return $response;
    }

    /**
     * @Route("/addproduct", name="add_product",methods={"POST"})
     */
    public function AddProduct(Request $request)
    {
    /*  $serializer=$this->get('serializer');
      $product=$serializer->deserialize($request->getContent(),Product::class,'json');
      $em=$this->getDoctrine()->getManager();
      $em->persit($product);
      $em->flush();
    return $this->json($product);*/

    }

}
