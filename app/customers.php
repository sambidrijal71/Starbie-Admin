<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class customers extends Model
{
    protected $guarded =[];  

    protected $table  = 'customers';
    protected $primaryKey = 'cid';
    public $timestamp = false;
}
