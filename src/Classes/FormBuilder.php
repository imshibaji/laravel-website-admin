<?php
namespace Shibaji\Admin\Classes;

use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

class FormBuilder{
    private $table;
    private $form;
    private $input;
    private $enc = false;

    public function __construct($table = null){
        $this->table = $table;
    }

    public function getTable(){
        return $this->table;
    }

    public function getColumnsName(){
        if($this->table){
            return Schema::getColumnListing($this->table->getTable());
        }else{
            return 'No Table Setup';
        }
    }

    public function getColumnType($col){
        if($this->table){
            return DB::getSchemaBuilder()->getColumnType($this->table->getTable(), $col);
        }else{
            return 'No Table Setup';
        }
    }

    public function input($name, $label=null, $type=null){
        $n = str_replace('_', ' ', $name);
        $n = Str::ucfirst($n);

        $t = $type ?? 'text';
        $l = $label ?? $n;
        $val = '';

        $input = '<';
        $input .= 'input';
        $input .= ' type="'. $t .'"';
        $input .= ' name="'. $name .'"';
        $input .= ' title="'. $n .'"';
        $input .= ' id="'. $n .'"';
        $input .= ' class="form-control"';
        $input .= ' placeholder="'. $l .'"';
        $input .= $val;
        $input .= '>';

        $this->input .= $input;
        return $this->input;
    }

    public function file($name, $label=null){
        $n = str_replace('_', ' ', $name);
        $n = Str::ucfirst($n);

        $t = 'file';
        $l = $label ?? $n;

        $input = '<';
        $input .= 'input';
        $input .= ' type="'. $t .'"';
        $input .= ' name="'. $name .'"';
        $input .= ' title="'. $n .'"';
        $input .= ' id="'. $n .'"';
        $input .= ' class="form-control"';
        $input .= ' placeholder="'. $l .'"';
        $input .= '>';

        $this->enc = true;

        $this->input .= $input;
        return $this->input;
    }

    public function textarea($name, $label=null){
        $n = str_replace('_', ' ', $name);
        $n = Str::ucfirst($n);
        $l = $label ?? $n;

        $input = '<';
        $input .= 'textarea';
        $input .= ' name="'. $name .'"';
        $input .= ' title="'. $n .'"';
        $input .= ' id="'. $n .'"';
        $input .= ' class="form-control"';
        $input .= ' placeholder="'. $l .'"';
        $input .= '></textarea>';

        $this->input .= $input;
        return $this->input;
    }

    public function action($url, $mode='GET'){
        $action = 'action="'. $url .'"';
        $mod = 'mode="'. $mode .'"';
        $enc = $this->enc ? 'enctype="multipart/form-data"' : '';

        $this->form .= '<form '.$action.' '.$mod.' '.$enc.'>';
        $this->form .= '<input type="hidden" name="_token" value="'.csrf_token().'">';
        $this->form .= $this->input;
        $this->form .= '<button type="submit" class="btn btn-secondary btn-block">Save</button>';
        $this->form .= '</form>';
    }

    public function render(){
        return $this->form ?? $this->input;
    }
}
