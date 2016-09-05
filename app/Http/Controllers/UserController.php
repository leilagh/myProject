<?php

namespace App\Http\Controllers;
use Hash;

use App\Http\Requests;
use Illuminate\Http\Request;
use Input, Validator, Auth;
use App\Services\UserRegistrar;
use App\Models\User;
use App\Models\Roles;

class UserController extends Controller
{

	public function index()
    {
        $list = user::select('*')->get();

     //   return  view('blog.admin.index');
        return  view('blog.admin.user-list', compact('list'));

    }


   
}

?>