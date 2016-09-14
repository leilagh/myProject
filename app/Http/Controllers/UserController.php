<?php

namespace App\Http\Controllers;
use Hash;

use App\Http\Requests;
use Illuminate\Http\Request;
use Input, Validator, Auth;
use App\Models\User;
use App\Models\Keywords;

class UserController extends Controller
{

	public function getIndex()
    {
//        $list = user::select('*')->get();
        $list = user::select('*')->paginate(10);

        //   return  view('blog.admin.index');
        return  view('admin.user.index', compact('list'));

    }

    private function getValidator($data)
    {
        $conditions = [
            'title' => 'required|min:3',
            'roles' => 'required|array'
        ];
        return Validator::make($data, $conditions);

    }

    public function getEdit($id)
    {
        $users = User::findOrFail($id);
        return view('admin.user.edit', compact('users'));
    }

    public function postEdit($id)
    {
        $validator = self::getValidator(Request::all());
        if ($validator->fails()) {
            return $validator->messages();
        }
        try {
            $data['title'] = Request::get('title');
            $data['user_id'] = Request::get('user_id');
            Keywords::findOrFail($id)->update($data);
            return 'Successfully update';
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

}

?>