<?php
namespace Shibaji\Admin\Menus;

use Shibaji\Admin\Classes\MenuBuilder;

class AdminMenu extends MenuBuilder{

    public function getKey(){
        return $this->key;
    }

    public function getValue(){
        return $this->value;
    }
}
