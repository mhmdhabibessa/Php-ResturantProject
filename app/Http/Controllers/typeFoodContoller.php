<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class typeFoodContoller extends Controller
{

    public  function view_all_food(){
            $products= Products::all();
            return view('menu', ['products' => $products,'layout'=> 'view_all_food']);


    }

    
    public  function create(){
        $products= Products::all();
        return view('menu', ['products' => $products,'layout'=> 'create']);


}
    public  function store(Request $requset){
            $products = new Products();
            $products -> name  = $requset -> input('name'); 
            $products -> price  = $requset -> input('price');
            $products -> image  = $requset -> input('image');
            $products -> description  = $requset -> input('description');
            $products -> save();

            return redirect('/home');

}

}
