<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Wallpaper;
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
        $category_id = $request->category_id;
        $img = $request->img;
        // dd($request->all());

        $request->validate([
            'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time().'.'.$request->img->extension();

        $request->img->move(public_path('img'), $imageName);

        /* Store $imageName name in DATABASE from HERE */

        // return back()
        //     ->with('success','You have successfully upload image.')
        //     ->with('img',$imageName);

        // dd($request->all());
        // return view('upload');

        $wallpaper = new Wallpaper();
        $wallpaper->name = $name;
        $wallpaper->description = $description;
        $wallpaper->category_id = $category_id;
        $wallpaper->img = $imageName;

        $wallpaper->save();

        return redirect()->route('home');
    }
}
