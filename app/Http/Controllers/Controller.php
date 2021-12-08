<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    function contactPage(){
        return view("contact");
    }
    function showpromotion(Request $request){
        $name=$request->name;
        $age=$request->age;

        return view('product',[
            'name'=>$name,
            'age'=>$age,
        ]);
    }
}
