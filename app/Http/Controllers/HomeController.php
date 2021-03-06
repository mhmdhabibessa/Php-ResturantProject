<?php

namespace App\Http\Controllers;
use App\Models\Products;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $products=Products::latest()->take(4)->get();;    
        return view('home',['products' => $products]);
    }

    // public function view_menu() {

    //     return view('Frontend.menu');
    // }
    

   
}
