<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class resource extends Model
{
    //table name
    protected $table = 'resource';

    //Primary key 
    public $primaryKey = 'resource_id';

    //Timestamp
    public $timestamps = false;
}