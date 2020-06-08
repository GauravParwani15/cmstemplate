<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class booking extends Model
{
    //table name
    protected $table = 'booking';

    //Primary key 
    public $primaryKey = 'booking_id';
    
    //Timestamp
    public $timestamps = false;

    public function resource(){
        return $this->belongsTo('App\resource','resource_id');
    }
}
