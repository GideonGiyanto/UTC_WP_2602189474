<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    public function category(){
        return $this->hasOne(Category::class);
    }

    public function writer(){
        return $this->belongsTo(Writer::class);
    }
}
