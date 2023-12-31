<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function blog(){
        return $this->belongsTo(\App\Models\Blog::class);
    }

    public function user(){
        return $this->belongsTo(\App\Models\User::class);
    }
}
