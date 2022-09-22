<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use App\Models\Shipment;
use App\Models\Voyage;
use Illuminate\Http\Request;

class DriverController extends Controller
{
    //
    public  function index()
    {
        $drivers = Driver::latest()->filter(request(['search']))->paginate(6);
        return view('drivers', ([

            "drivers" => $drivers
        ]));
    }

    public function edit(Voyage $voyage){
       
        return view('driver.edit-voyage',
        ['voyage'=>$voyage]
    );
    }

    public static function profile(Driver $driver)
    {

        return view("driver.profile-page", ([
            'driver' => $driver
        ]));
    }



   



    public function destroy(Voyage $voyage)
    {
        
        $voyage->delete();
        return back()->with('success', 'Post Deleted!');
    }



    public function store()
    {
        
        $attributes = request()->validate([
            'driverid' => 'required',
            'shipment_id' => 'max:455|required',
            'price' => 'required',
            'thumbnail' => '',
            'description' => 'max:800'
        ]);


        

       
       Voyage::create($attributes);
        return redirect()->back()->with('success', 'shipment UPDATED');
    }

}
