<?php
namespace Shibaji\Admin\Classes;

use Illuminate\Support\Facades\Config;

class MenuBuilder extends Config{
    protected $key = '';
    protected $value = '';

    protected function setKey($key){
        $this->key = $key;
    }

    protected function setValue($value){
        $this->value = $value;
    }

    public function get($key){
        parent::get($this->key . $key);
    }

    public function set($key, $value){
        parent::set( $this->key . $key, $value);
    }

    public function append($key, $value){
        parent::push( $this->key . $key, $value);
    }
    public function prepend($key, $value){
        parent::prepend( $this->key . $key, $value);
    }
}
