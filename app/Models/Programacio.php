<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Programacio extends Model {
    protected $fillable = ['any_academic', 'descripcio', 'user_id'];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function activitats() {
        return $this->hasMany(Activitat::class);
    }
}
