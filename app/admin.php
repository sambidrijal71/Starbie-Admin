<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
    protected $table  = 'admin';
    protected $primaryKey = 'aid';
    public $timestamp = false;
}
