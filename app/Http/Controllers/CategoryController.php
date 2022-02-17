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
        $category = Category::get();
        $this->data['category'] = $category ;
        // dd($category);
        return view('addcategory', $this->data);
    }

    public function create(Request $request)
    {
        $category = new Category;
        // dd($request->all());
        $category->cat_name = $request['cat_name'];
        $category->description = $request['description'];

        $category->save();

        return redirect()->back();
    }

    public function edit_cat(Request $request)
    {
        $id = $request->id;
        Category::where('id',$id)->update([
            'cat_name' => $request->cat_name,
            'description' => $request->description
        ]);

        return redirect()->back();
    }

    public function delete_cat(Request $request)
    {
        $id = $request->id;
        Category::where('id',$id)->delete();

        return redirect()->back();
    }
}
