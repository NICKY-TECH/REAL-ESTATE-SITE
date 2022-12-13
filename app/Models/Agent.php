<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Buildings;

class Agent extends Model
{
    protected $fillable=[
        'agent_name',
        'facebook',
        'about_agent',
        'email',
        'phone_number',
        'twitter',
        'instagram',
        'image',
        'linkedIn'
    ];

    public function buildings(){
        return $this->hasMany(Buildings::class);
    }
    
    public function reviews(){
        return $this->hasMany(Review::class);
    }
    use HasFactory;
}
