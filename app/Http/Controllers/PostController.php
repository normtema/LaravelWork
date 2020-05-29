<?php

namespace App\Http\Controllers;

use App\CreateUser;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function get_new_User()
    {
        return View('view_user');
    }

    public function create_User(Request $request)
    {
        $temp = new CreateUser($_POST['name'], $_POST['email'], $_POST['password']);
        return View('index', ['user' => $temp]);
    }
}
