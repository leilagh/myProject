<?php

namespace App\Http\Controllers;

/*
use Hash;
use DB;

use App\Http\Requests;
use Illuminate\Http\Request;
use Input, Validator, Auth;
use App\Services\UserRegistrar;
use App\Models\User;
use App\Models\Roles;
*/

use App\Models\Role;
use Exception;
use Request;
use Illuminate\Support\Facades\Route;
use Validator;

class RoleController extends Controller
{

    public function getIndex()
    {
        $roles = Role::all();
        return view('blog.admin.role.index', compact('roles'));
    }

    public function getNew()
    {
        return view('blog.admin.role.new')->with('routeLists', self::routesList());
    }

    public function postNew()
    {
        $validator = self::getValidator(Request::all());
        if ($validator->fails()) {
            return $validator->messages();
        }
        try {
            $data['title'] = Request::get('title');
            $data['roles'] = json_encode(Request::get('roles'));
            Role::create($data);
            return 'Successfully created';
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }


  /*    //  $list = User::all();
        $list = $users = DB::table('users')->simplePaginate(2);;
//print_r($list);die;
        //   return  view('blog.admin.index');
        return  view('blog.admin.userlist', compact('list'));*/

    public function getEdit($id)
    {
        $role = Role::findOrFail($id);
        $routeLists = self::routesList();
        return view('blog.admin.role.edit', compact('role', 'routeLists'));
    }

    public function postEdit($id)
    {
        $validator = self::getValidator(Request::all());
        if ($validator->fails()) {
            return $validator->messages();
        }
        try {
            $data['title'] = Request::get('title');
            $data['roles'] = json_encode(Request::get('roles'));
            Role::findOrFail($id)->update($data);
            return 'Successfully update';
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    private function getValidator($data)
    {
        $conditions = [
            'title' => 'required|min:3',
            'roles' => 'required|array'
        ];
        return Validator::make($data, $conditions);

    }

    protected function routesList()
    {
        $routes = Route::getRoutes();
        $routeActions = [];
        foreach ($routes as $route) {
            $routeActions[] = $route->getActionName();
        }
        $routeActions = array_unique($routeActions);
        return $routeActions;
    }

}
