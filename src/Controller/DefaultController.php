<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{


    public function index()
    {
       /**
        * @Route("/", name="homepage")
        */
        $number = random_int(0, 100);
        return new Response(<<<EOF
<html>
 <body>
   <p>Сайт работает</p>
 </body>
</html>
EOF
 );
    }}