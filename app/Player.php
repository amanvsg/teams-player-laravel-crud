<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use App\Team;

class Player extends Model
{
    protected $fillable = [
        'first_name','teams_id','last_name','gender','age'
    ];

    public function team(){
        return $this->belongsTo(Team::class);
     }

     

    }

