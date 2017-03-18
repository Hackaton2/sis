<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PruebaController extends Controller
{

    public function index(Request $request)
    {
        $this->validate($request, [
        'ci' => 'required|numeric|min:7|unique:users,ci',
        
        ]);
    }


}
