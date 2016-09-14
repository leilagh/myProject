<?php

namespace App\Http\Controllers;

use App\Models\Keywords;
use Exception;
use Request;
use Illuminate\Support\Facades\Route;
use Validator;

class KeywordController extends Controller
{

    public function getIndex()
    {
      //  print_r("keywords");die;
        $keywords = Keywords::all();
        return view('admin.keyword.index', compact('keywords'));
    }

    public function getNew()
    {
        return view('admin.keyword.new');
    }

    public function postNew()
    {
        $validator = self::getValidator(Request::all());
        if ($validator->fails()) {
            return $validator->messages();
        }
        try {
            $data['title'] = Request::get('title');
            $data['user_id'] = Request::get('user_id');
            Keywords::create($data);
            return 'Successfully created';
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function getEdit($id)
    {
        $keyword = Keywords::findOrFail($id);
        return view('admin.keyword.edit', compact('keyword'));
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
    public function getDelete($id)
    {
    //    print_r($id);die;
        /*$validator = self::getValidator(Request::all());
        if ($validator->fails()) {
            return $validator->messages();
        }*/
        try {
            $data['id'] = $id;
            Keywords::findOrFail($id)->delete();
            return 'Successfully delete';
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    private function getValidator($data)
    {
        $conditions = [
            'title' => 'required|min:2'
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
