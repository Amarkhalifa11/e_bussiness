<?php

namespace App\Http\Controllers;

use App\Models\Portfolie;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\SubCategory;


class PortfolieController extends Controller
{
    

    public function index()
    {
        $protfolios = Portfolie::all();
        $subCategorys = Category::all();

        return view('frontend.portfolio' , compact('protfolios' , 'subCategorys'));
    }


    public function single_protfolio($id)
    {
        $protfolios = Portfolie::find($id);
        $category = Category::all();
        $subCategory = SubCategory::all();

        return view('frontend.single_prot' , compact('protfolios' , 'category' , 'subCategory'));
    }

    public function category($id)
    {
        $protfolios = Portfolie::where('category_id',$id)->get();
        $subCategorys = Category::all();
        
        return view('frontend.portfolio' , compact('protfolios' , 'subCategorys'));
    }

    public function all_protfolie()
    {
        $protfolios = Portfolie::all();
        return view('backend.protofolio.all_protfolio' , compact('protfolios'));
        
    }

    public function create()
    {
        return view('backend.protofolio.add_protfolie');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'           => 'required',
            'image'          => 'required|image',
            'description'    => 'required',
            'type_id'        => 'required',
            'category_id'    => 'required',
        ]);

        $name             = $request->name;
        $description      = $request->description;
        $type_id          = $request->type_id;
        $category_id      = $request->category_id;

        $protfolio_image = $request->file('image');

        $name_gen = hexdec(uniqid()); 
        $img_ext = strtolower($protfolio_image->getClientOriginalExtension()); 
        $img_name = $name_gen . '.' . $img_ext; 
         
        $upload_location = 'frontend/assets/img/portfolio/'; 
        $image = $img_name; 
        $protfolio_image->move($upload_location,$img_name); 

        $protfolios = Portfolie::create([
            'name'           =>$name,
            'description'    =>$description,
            'type_id'        =>$type_id,
            'category_id'    =>$category_id,
            'image'          =>$image,
        ]);
        $protfolios->save();

        return redirect()->route('dashboard.all_protfolie');

    }


    public function edit( $id)
    {
        $protfolios = Portfolie::find($id);
        return view('backend.protofolio.edit_prof' , compact('protfolios'));
        
    }


    public function update(Request $request, $id)
    {
        $protfolios = Portfolie::find($id);

        $validated = $request->validate([
            'name'           => 'required',
            'image'          => 'required|image',
            'description'    => 'required',
            'type_id'        => 'required',
            'category_id'    => 'required',
        ]);

        $name             = $request->name;
        $description      = $request->description;
        $type_id          = $request->type_id;
        $category_id      = $request->category_id;

        $protfolio_image = $request->file('image');

        $name_gen = hexdec(uniqid()); 
        $img_ext = strtolower($protfolio_image->getClientOriginalExtension()); 
        $img_name = $name_gen . '.' . $img_ext; 
         
        $upload_location = 'frontend/assets/img/portfolio/'; 
        $image = $img_name; 
        $protfolio_image->move($upload_location,$img_name); 

        $protfolios->update([
            'name'           =>$name,
            'description'    =>$description,
            'type_id'        =>$type_id,
            'category_id'    =>$category_id,
            'image'          =>$image,
        ]);
        $protfolios->save();

        return redirect()->route('dashboard.all_protfolie');
    }

    public function destroy($id)
    {
        $protfolios = Portfolie::find($id);
        $protfolios->delete();
        return redirect()->route('dashboard.all_protfolie');

    }
}
