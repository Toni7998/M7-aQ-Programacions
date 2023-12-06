<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Criteri extends Model {
    protected $fillable = ['descripcio', 'ra_id'];

    public function ra() {
        return $this->belongsTo(RA::class);
    }
}

