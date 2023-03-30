<?php

namespace Myproject\App\Classes;

use Myproject\App\Classes\Interfaces\ArrPrint;

abstract class DoArrPrint implements ArrPrint
{
   public function PrintArray($ar){
            print_r($ar);
    }
}