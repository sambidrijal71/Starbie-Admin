<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organizations extends Model
{
    protected $guarded =[];
    protected $primaryKey="oid";
    protected $table = "organizations";
}
