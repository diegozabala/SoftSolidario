<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;

class FrontController extends Controller
{
    //

    function index(Request $request){
      return view("/inicio/index");
    }

    public function create(){
        return view('admin.users.create');
    }

    public function store(Request $request){

        $usuario = new User();
        $usuario->name=$request->name;
        $usuario->email=$request->email;
        $usuario->password=bcrypt($request->password);

        $usuario->save();

        return redirect()->route('front.index');
    }
}
