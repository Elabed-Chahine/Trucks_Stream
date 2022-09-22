<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use App\Models\Shipment;
use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function show()
    {
        
        if (Auth::guard('web')->check()) {
            $shipments = auth()->user()->shipments;
            return view('user.dash-layout', [
                "shipments" => $shipments,
                
            ]);
        }
        if (Auth::guard('driver')->check()) {
            $voyages = Auth::guard('driver')->user()->voyages;
            return view('driver.dash-layout', [
                "voyages" =>$voyages,
                
            ]);
        }
       
    }
    public function index()
    {
        $bool = true;
        $voyages = auth()->guard('driver')->user()->voyages;
            return view('driver.dash-layout', [
                "voyages" => $voyages,
                "bool" => $bool
            ]);
    }
}
