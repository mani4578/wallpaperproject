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

    public function upload(Request $request)
    {
        $name = $request->name;
        $description = $request->description;
        $category_id = $request->cat_id;
        $img = $request->img;

        $request->validate([
            'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($image = $request->file('image')) {
            $destinationPath = 'img/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }
        dd($request->all());
        return view('upload');
    }
}
