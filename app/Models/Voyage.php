<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voyage extends Model
{
    use HasFactory;
    protected $guarded=[""];

    public function owner()
    {
        return $this->belongsTo(Driver::class, 'driverid', 'id');
    }

    public function shipment()
    {
        return $this->belongsTo(Shipment::class, 'shipment_id', 'id');
    }
    
}
