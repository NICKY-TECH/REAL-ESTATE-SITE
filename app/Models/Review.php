<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Agent;
use App\Models\User;

class Review extends Model
{
            protected $fillable=[
             'agent_id',
             'review',
            ];

            public function user(){
                return $this->hasOne(User::class);
            }

            public function agents(){
                return $this->hasOne(Agent::class);
            }
    use HasFactory;
}
