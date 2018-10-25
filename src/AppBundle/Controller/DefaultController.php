<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\JsonResponse;

class DefaultController extends Controller
{
    /**
     * @Route("/liste", name="homepage")
     * @Method({"GET"})
     */
    public function indexAction()
    {
        // replace this example code with whatever you need
        
        $lang1 = array(
             "langage" => "fetra",
             "fr" => "harinjatovo");
        $lang2 = array(
             "langage" => "andry",
             "fr" => "harinjatovo");
        $lang3 = array(
             "langage" => "tounaf",
             "fr" => "harinjatovo");
       
        $techno = array($lang1,$lang2, $lang3);
        $res = new JsonResponse($techno);
        $res->headers->set("Access-Control-Allow-Origin" , "*");
        return $res;
    }

    // /**
    //  * @Router("/login", name="login")
    //  * @Method({"POST"})
    //  */
    // public function loginAction(Request $request)
    // {
    //     if ( $request->isMethod('POST'))
    //     {
            
    //     }
    //     return new JsonResponse([
    //         "error" => "une erreur",
    //         "num" => 123
    //     ]);
    // }
}
