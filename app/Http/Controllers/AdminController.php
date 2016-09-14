<?php

namespace App\Http\Controllers;

use Exception;
use Request;
use Validator;

class AdminController extends Controller
{

    public function getIndex()
    {
      //  print_r("keywords");die;
      //  $keywords = Keywords::all();
        return view('admin.index');
    }

}
