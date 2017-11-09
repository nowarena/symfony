<?php

namespace AppBundle\Model;

class Base
{

    public $val = 0;

    public function __construct($val)
    {
        $this->val = $val;
    }

}
