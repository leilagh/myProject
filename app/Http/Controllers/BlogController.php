<?php

namespace App\Http\Controllers;
use Hash;

use App\Http\Requests;
use Illuminate\Http\Request;
use Input, Validator, Auth;
use App\Services\UserRegistrar;
use App\Models\User;
use App\Models\Keywords;
use App\models\Categories;
use App\models\Pictures;

class BlogController extends Controller
{

	public function index()
    {
    	//$admin = $admin_id;
    	return  view('blog.admin.index');

    }
    public function getKeyword()
    {
    	//$admin = $admin_id;
    	return  view('blog.admin.keyword');

    }

    public function postKeyword(Request $request, UserRegistrar $add_keyword, Keywords $keywordsModel)
    {

    	$validation = Validator::make($request->all(), [
            'title' => ['required'],
          //  'picture' => ['required'],
        ]);

        if ($validation->fails()) {
            return redirect()->back()->withErrors($validation)->withInput();
        }
        $keyword = $add_keyword->add_keyword($request->all());
        return redirect()->route('blog.admin.index');
        //print_R($keyword);

    }

    public function getCategory()
    {
    	//$admin = $admin_id;
    	return  view('blog.admin.category');

    }

    public function postCategory(Request $request, UserRegistrar $add_category, Categories $categoriesModel)
    {
    	$validation = Validator::make($request->all(), [
            'title' => ['required'],
        ]);

        if ($validation->fails()) {
            return redirect()->back()->withErrors($validation)->withInput();
        }
        $category = $add_category->add_category($request->all());
        return redirect()->route('blog.admin.index');
        //print_R($keyword);

    }

    public function getPicture()
    {
    	//$admin = $admin_id;
     //  abort(404,"not find this page ");

        //abort(403, 'Unauthorized action.');
    return  view('blog.admin.picture');

    }

    public function postPicture(Request $request, UserRegistrar $add_picture, Pictures $picturesModel)
    {
        abort(404,"not find");
        $validation = Validator::make($request->all(), [
            'title' => ['required'],
            'picture' => ['required'],
        ]);
        if ($validation->fails()) {
            return redirect()->back()->withErrors($validation)->withInput();
        }
  //  	print_r($request->file('picture')->getClientOriginalName());die;
      //  abort(404,"not find");
      /*  abort(404, array(
    'message' => 'My custom message'
));*/

$imageName = "dd".$request->file('picture')->getClientOriginalName().".".$request->file('picture')->getClientOriginalExtension();
//$imageName = $request->file('picture')->getClientOriginalName();


    $request->file('picture')->move(
        base_path() . '/public/images/catalog/', $imageName
    );
    $request->picture = $imageName;
    $picture = $add_picture->add_picture($request->all());
        return redirect()->route('blog.admin.index');
   // abort(404);

    /*	$fileName = $request->file('picture');
    	$destinationPath = "/";
    	$request->file('image')->move($destinationPath, $fileName);
    	$validation = Validator::make($request->all(), [
            'title' => ['required'],
        ]);

        if ($validation->fails()) {
            return redirect()->back()->withErrors($validation)->withInput();
        }
        $picture = $add_picture->add_picture($request->all());
        return redirect()->route('blog.admin.index');*/
        //print_R($keyword);

    }
   
}

?>