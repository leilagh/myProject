<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class DebugController extends Controller
{


    public function getIndex()
    {
       // abort(404,"Not found page rt");
		//return 1/0;
        dd(json_encode([5]));
    }
}
