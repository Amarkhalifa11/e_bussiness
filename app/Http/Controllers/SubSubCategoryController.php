<?php

namespace App\Http\Controllers;

use App\Models\SubSubCategory;
use Illuminate\Http\Request;

class SubSubCategoryController extends Controller
{

    

    public function index()
    {
        $subSubCategorys = SubSubCategory::all();
        return view('backend.subSubCategory.subSubCategory' , compact('subSubCategorys'));

    }

    public function create()
    {
        return view('backend.subSubCategory.add_subsubcategory');
        
    }

    public function store(Request $request)
    {
        $name = $request->name;

        $validated = $request->validate([
            'name' => 'required',
        ]);

        $subSubCategorys = SubSubCategory::create([
            'name'  =>$name,
        ]);

        $subSubCategorys->save();

        return redirect()->route('dashboard.subsubCategorys');
    }

    public function edit($id)
    {
        $subSubCategorys = SubSubCategory::find($id);
        return view('backend.subSubCategory.edit_subsubcategory' , compact('subSubCategorys'));
    }

    public function update(Request $request, $id)
    {
        $subSubCategorys = SubSubCategory::find($id);

        $name = $request->name;

        $validated = $request->validate([
            'name' => 'required',
        ]);

        $subSubCategorys->update([
            'name' =>$name,
        ]);

        return redirect()->route('dashboard.subsubCategorys');
    }

    public function destroy($id)
    {
        $subSubCategorys = SubSubCategory::find($id);
        $subSubCategorys->delete();
        return redirect()->route('dashboard.subsubCategorys');
    }
}
