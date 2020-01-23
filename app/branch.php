<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class branch extends Model
{
    protected $table  = 'branches';
    protected $primaryKey = 'bid';
    public $timestamp = false;
}
