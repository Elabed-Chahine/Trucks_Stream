<?php

namespace App\Http\Controllers;

use App\Models\Shipment;
use App\Models\Voyage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShipmentController extends Controller
{
    //
    public  function index(){
        //DB::table('SELECT  * from shipments where id not in (select shipmentid from voyages)')
        $shipments=Shipment::latest()->filter(request(['search','place']))->paginate(6);
        $locations=Shipment::select('lieu_depart')->distinct()->get();
        return view('welcome',([

            "shipments" => $shipments,
            "locations" => $locations
        ]));
    }

    public  function detail(Shipment $shipment){
        return view ('components.shipment',[
            'shipment' => $shipment
        ]);

    }


    
}
