<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Agent;

class Buildings extends Model
{

    protected $fillable=[
      'agent_id',
       'garage',
       'status',
       'images',
      'description',
       'price',
        'city',
        'address',
        'rooms',
    
    ];

    protected $casts=[
        'images'=>'array',

    ];

    public function agent(){
        return $this->belongsTo(Agent::class);
    }

    use HasFactory;
}
