<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class My_colection extends Model
{
    protected $guarded=[];
    protected $types=array(
        1=>"book",
        2=>"music",
        3=>"movie"
    );
    public function getType(){
        return $this->types[$this->type];
    }
    public function getTypes(){
        return $this->types;
    }
}
