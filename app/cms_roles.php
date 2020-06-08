<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cms_roles extends Model
{
        //table name
    protected $table = 'cms_roles';

    //Primary key 
    public $primaryKey = 'id';

    //Timestamp
    public $timestamps = false;
}
