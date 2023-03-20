<?php

namespace App\Http\Controllers;

use App\Models\SubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{

    
    public function index()
    {
        $subCategorys = SubCategory::all();
        return view('backend.sub_category.all_sub_category' , compact('subCategorys'));
    }

    public function create()
    {
        return view('backend.sub_category.add_subcategory');
    }

    public function store(Request $request)
    {
        $name = $request->name;

        $validated = $request->validate([
            'name' => 'required',
        ]);

        $subCategorys = SubCategory::create([
            'name'  =>$name,
        ]);

        $subCategorys->save();

        return redirect()->route('dashboard.subCategorys');

    }

    public function edit($id)
    {
        $subCategorys = SubCategory::find($id);

        return view('backend.sub_category.edit_subcategory' ,compact('subCategorys'));
    }

    public function update(Request $request, $id)
    {
        $subCategorys = SubCategory::find($id);

        $name = $request->name;

        $validated = $request->validate([
            'name' => 'required',
        ]);

        $subCategorys->update([
            'name' =>$name,
        ]);

        return redirect()->route('dashboard.subCategorys');

    }

    public function destroy($id)
    {
        $subCategorys = SubCategory::find($id);
        $subCategorys->delete();
        return redirect()->route('dashboard.subCategorys');

    }
}
