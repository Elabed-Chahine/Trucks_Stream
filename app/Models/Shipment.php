<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rules\NotIn;

class Shipment extends Model
{
    protected $guarded = [""];
    use HasFactory;



    public function scopefilter($query,array $filters){

         $query->when($filters['search']?? false, fn($query,$search)=>
            $query->where(fn($query)=>
            $query->where('id',$search)->orwhere('lieu_depart','LIKE','%'.$search.'%')->orwhere('lieu_arrive','LIKE', '%' . $search . '%')->orwhere('description','LIKE', '%' . $search . '%')

    )

    );
           $query->when($filters['place']??false, fn($query,$place)=>
           $query->where('lieu_depart','LIKE',$place));


        $query ->whereNotIn('id', Voyage::select('shipment_id'))
                    ->get();
    }



    public function owner(){
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function voyage(){
        return $this->hasOne(Voyage::class, 'shipment_id', 'id' );
    }

}
