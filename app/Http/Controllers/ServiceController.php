<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{

    public function index()
    {
        $services = Service::all()->take(6);
        return view('frontend.index' , compact('services'));
    }

    public function all_service()
    {
        $services = Service::all();
        return view('backend.service.all_service' , compact('services'));
    }
 
    public function create()
    {
        return view('backend.service.add_service');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title'       => 'required',
            'icon'        => 'required',
            'description' => 'required',
        ]);

        $title        = $request->title;
        $icon         = $request->icon;
        $description  = $request->description;

        $services = Service::create([
            'title'        =>$title,
            'icon'         =>$icon,
            'description'  =>$description,
        ]);

        $services->save();
        return redirect()->route('dashboard.all_service');

    }

    public function edit($id)
    {
        $services = Service::find($id);
        return view('backend.service.edit_service' , compact('services'));
    }

    public function update(Request $request,$id)
    {
        $services = Service::find($id);

        $validated = $request->validate([
            'title'       => 'required',
            'icon'        => 'required',
            'description' => 'required',
        ]);

        $title        = $request->title;
        $icon         = $request->icon;
        $description  = $request->description;

        $services->update([
            'title'        =>$title,
            'icon'         =>$icon,
            'description'  =>$description,
        ]);

        $services->save();
        return redirect()->route('dashboard.all_service');
    }
    
    public function destroy($id)
    {
        $services = Service::find($id);
        $services->delete();
        return redirect()->route('dashboard.all_service');

    }
}
