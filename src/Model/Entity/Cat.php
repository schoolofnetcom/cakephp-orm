<?php

namespace App\Model\Entity;

use Cake\ORM\Entity;

class Cat extends Entity
{
    
    protected function _setTitle($title)
    {
        return $title.'::cat';
    }
    
    protected function _getTitle($title)
    {
        return mb_strtoupper($title);
    }
}
