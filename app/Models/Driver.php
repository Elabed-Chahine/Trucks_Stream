<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Driver extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $with = ["voyages"];
    protected $guarded = [""];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    
    public function scopefilter($query, array $filters){
           $query->when($filters['search']?? false, fn($query,$search)=>
            $query->where(fn($query)=>
            $query->where('id',$search)->orwhere('name','LIKE','%'.$search.'%')->orwhere('bio','LIKE', '%' . $search . '%')));
    }



    public function setPasswordAttribute($password)
    {
        $this->attributes["password"] = bcrypt($password);
    }
    public function voyages()
    {
        return $this->hasMany(Voyage::class,'driverid','id');
    }

}
