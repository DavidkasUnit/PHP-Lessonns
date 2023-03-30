<?php

namespace Myproject\App\Classes\Traits;

trait WatsApp
{
    public function msgReversed($str){
      echo  strrev($str);
    }
}