<?php

namespace App\Http\Controllers;
use Hash;

use App\Http\Requests;
use Illuminate\Http\Request;
use Input, Validator, Auth;
use App\Services\UserRegistrar;
use App\Models\User;
use App\Models\Roles;

class RoleController extends Controller
{

	public function index()
    {
        //return  view('blog.admin.index');

    }
    public function users()
    {
        return  view('blog.admin.users');

    }

    public function getRole()
    {
    	return  view('blog.admin.role');

    }

    public function postRole(Request $request, UserRegistrar $add_role, Roles $rolesModel)
    {
    	$validation = Validator::make($request->all(), [
            'title' => ['required'],
        ]);

        if ($validation->fails()) {
            return redirect()->back()->withErrors($validation)->withInput();
        }
        $role = $add_role->add_role($request->all());
        return redirect()->route('blog.admin.users');
    }

   
}

?>