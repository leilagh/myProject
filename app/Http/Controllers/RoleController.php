<?php

namespace App\Http\Controllers;

use Hash;
use DB;

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
            'name' => ['required'],
        ]);
        if ($validation->fails()) {
            return redirect()->back()->withErrors($validation)->withInput();
        }
        $role = $add_role->add_role($request->all());
        return redirect()->route('blog.admin.users');
    }
    public function userlist()
    {

      //  $list = User::all();
        $list = $users = DB::table('users')->simplePaginate(2);;
//print_r($list);die;
        //   return  view('blog.admin.index');
        return  view('blog.admin.userlist', compact('list'));
    }


    public function getEditrole($id)
    {
        $role_list = Roles::all();
        $user_info = User::find($id);
        return  view('blog.admin.editrole', compact('id','role_list','user_info'));

    }

    public function postEditrole(Request $request)
    {
        $user = User::find($request->id);

        $user->roles = serialize($request->roles);

        $user->save();

       // print_R($request->roles);die;
        return redirect()->route('blog.admin.users');

    }

   
}

?>