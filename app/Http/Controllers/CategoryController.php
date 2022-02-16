<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function categories()
    {
        // dd('In');
        $category = Category::find(1);
        dd($category->with('wallpapers')->get());
    }
}
