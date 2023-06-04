<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function message(){
        return $this->hasMany(Message::class);
    }
    public function propertyimage(){
        return $this->hasMany(PropertyImage::class);
    }
}
