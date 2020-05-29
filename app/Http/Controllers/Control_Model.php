<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Goods;
use App\User;
class Control_Model extends Controller
{
    public function get_new_Good($name, $price){
        $temp = new Goods($name, $price);
        return View('view_good', ['good'=>$temp]);
    }

    public function get_new_User(){
        return View('view_user');
    }

    public function create_User(Request $request){
        $temp = new User($_POST['name'], $_POST['email'], $_POST['password']);
        return View('index', ['user'=>$temp]);
    }

}
