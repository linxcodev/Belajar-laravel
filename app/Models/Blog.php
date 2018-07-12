<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blog extends Model
{
    use SoftDeletes; // soft delete
    // parameter harus deleted_at
    protected $dates = ['deleted_at']; // jika delete no null maka tdk shw

    // protected $table = 'my_blogs'; jika nama table berbeda

    // jika di table kita tidak ada created_at and updated_at
    public $timestamps = false;

    // untuk methode mass assigment harus ada
    // salah satu di antara dua ini
    // protected $fillable = ['title', 'description']; // whitelist
    protected $guarded = ['id']; // blocklist
}
