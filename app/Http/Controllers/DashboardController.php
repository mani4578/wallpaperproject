<?php

namespace App\Http\Controllers;
use App\Models\Category;


use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {

        $category = Category::get();
        $this->data['category'] = $category ;

        return view('home' , $this->data);
    }
}
