<?php


namespace App;


use Illuminate\Database\Eloquent\Model;

class CreateUser extends Model
{
    public $name;
    public $email;
    public $password;

    public function __construct($name, $email, $password){
        $this->name = $name;
        $this->password = $password;
        $this->email = $email;
    }
}
