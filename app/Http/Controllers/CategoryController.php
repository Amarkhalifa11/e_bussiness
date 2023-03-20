<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    

    public function index()
    {
        $categories = Category::all();
        return view('backend.category.all_category' , compact('categories'));
    }

    public function create()
    {
        return view('backend.category.add_category');
    }

    public function store(Request $request)
    {
        $name = $request->name;

        $validated = $request->validate([
            'name' => 'required',
        ]);

        $categories = Category::create([

            'name' =>$name,

        ]);

        return redirect()->route('dashboard.all_category');
    }


    public function edit($id)
    {
        $categories = Category::find($id);
        
        return view('backend.category.edit_category' , compact('categories'));
    }

    public function update(Request $request , $id)
    {

        $categories = Category::find($id);

        $validated = $request->validate([
            'name' => 'required',
        ]);

        $name = $request->name;
        $categories->update([

            'name' =>$name,
            
        ]);

        return redirect()->route('dashboard.all_category');


    }

    public function destroy($id)
    {
        $categories = Category::find($id);
        
        $categories->delete();
        return redirect()->route('dashboard.all_category');
        
    }
}
