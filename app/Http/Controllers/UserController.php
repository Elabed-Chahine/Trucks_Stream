<?php

namespace App\Http\Controllers;

use App\Models\Shipment;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public static function profile(User $user)
    {
        return view("user.profile-page", ([
            'user' => $user
        ]));
    }
    public static function create()
    {


        return view("user.add-shipment");
    }


    public static function store()
    {
        $attributes = request()->validate([
            'user_id' => 'required',
            'material' => 'max:455|required',
            'weight' => 'required',
            'lieu_arrive' => 'required',
            'lieu_depart' => 'required',
            'thumbnail' => '',
            'description' => 'max:800'

        ]);
        if (isset($attributes['thumbnail']))
        $attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnails');

              Shipment::create($attributes);
              return redirect('/')->with('success',"shipments added");

       
    }
    public function edit(Shipment $shipment){
        return view("user.edit-shipment",[
            'shipment'=>$shipment
        ]);
    }



    public function updat(Shipment $shipment){
       
        $attributes = request()->validate([
            'user_id' => 'required',
            'material' => 'max:455|required',
            'weight' => 'required',
            'lieu_arrive' => 'required',
            'lieu_depart' => 'required',
            'thumbnail' => '',
            'description' => 'max:800'
        ]);


        if(isset($attributes['thumbnail']))
        $attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnails');
    
        $shipment->update($attributes);
        return redirect()->back()->with('success','shipment UPDATED');

    }



    public function destroy(Shipment $shipment)
    {
        $shipment->delete();
        return back()->with('success', 'Post Deleted!');
    }
}
