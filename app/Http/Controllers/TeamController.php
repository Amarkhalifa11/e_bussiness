<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{


    public function index()
    {
        $teams = Team::all();
        return view('backend.team.all_team' , compact('teams'));
    }

    public function create()
    {
        return view('backend.team.add_team');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'        => 'required',
            'image'       => 'required|image',
            'track'       => 'required',
            'facebook'    => 'required',
            'instagram'   => 'required',
            'twitter'     => 'required',
        ]);

        $name        = $request->name;
        $track       = $request->track;
        $facebook    = $request->facebook;
        $instagram   = $request->instagram;
        $twitter     = $request->twitter;

        //2 uploade image 
 
        $team_image = $request->file('image'); 
 
        $name_gen = hexdec(uniqid()); 
        $img_ext = strtolower($team_image->getClientOriginalExtension()); 
        $img_name = $name_gen . '.' . $img_ext; 
         
        $upload_location = 'frontend/assets/img/team/'; 
        $image = $img_name; 
        $team_image->move($upload_location,$img_name); 
 
 
         $teams = Team::create([
            'name'          =>$name,
            'image'         =>$image,
            'track'         =>$track,
            'facebook'      =>$facebook,
            'instagram'     =>$instagram,
            'twitter'       =>$twitter,
        ]);
        $teams->save();

        return redirect()->route('dashboard.all_team');
    }

    public function edit($id)
    {
        $teams = Team::find($id);
        return view('backend.team.edit_team' , compact('teams'));
        
    }

    public function update(Request $request, $id)
    {
        $teams = Team::find($id);

        $validated = $request->validate([
            'name'        => 'required',
            'image'       => 'required|image',
            'track'       => 'required',
            'facebook'    => 'required',
            'instagram'   => 'required',
            'twitter'     => 'required',
        ]);

        $name        = $request->name;
        $track       = $request->track;
        $facebook    = $request->facebook;
        $instagram   = $request->instagram;
        $twitter     = $request->twitter;

        //2 uploade image 
 
        $team_image = $request->file('image'); 
 
        $name_gen = hexdec(uniqid()); 
        $img_ext = strtolower($team_image->getClientOriginalExtension()); 
        $img_name = $name_gen . '.' . $img_ext; 
         
        $upload_location = 'frontend/assets/img/team/'; 
        $image = $img_name; 
        $team_image->move($upload_location,$img_name); 
 
 
        $teams->update([
            'name'          =>$name,
            'image'         =>$image,
            'track'         =>$track,
            'facebook'      =>$facebook,
            'instagram'     =>$instagram,
            'twitter'       =>$twitter,
        ]);
        $teams->save();

        return redirect()->route('dashboard.all_team');
    }

    public function destroy($id)
    {
        $teams = Team::find($id);
        $teams->delete();
        return redirect()->route('dashboard.all_team');
        
    }
}
