<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Question extends Model
{
    protected $fillable = ['title', 'body'];

    // Relacion con tabla Users
    public function user() {
        return $this->belongsTo(User::class);
    }

    // Rellenar el slug de forma automatica
    public function setTitleAttribute($value) {
        $this->attributes['title'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }
}
