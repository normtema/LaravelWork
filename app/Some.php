<?php


namespace App;


use Illuminate\Database\Eloquent\Model;

class Some extends Model {
    public $id;
    public $name;

    public function __construct($id, $name)
    {
        $this->id = $id;
        $this->name = $name;
    }
}
