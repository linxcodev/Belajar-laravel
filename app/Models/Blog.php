<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    // jika di table kita tidak ada created_at and updated_at
     public $timestamps = false;
}
