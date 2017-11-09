<?php

// src/AppBundle/Controller/IndexController.php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

use AppBundle\Model\Base;

class IndexController
{

    /**
     * @Route("/index/index")
     */
    public function indexAction()
    {
        $number = mt_rand(0, 100);

        $obj = new Base(2);

        return new Response(
            '<html><body>' . " " . $obj->val . ' Lucky number: '.$number.'</body></html>'
        );
    }
}