<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UF extends Model {
    protected $fillable = ['nom', 'descripcio', 'hores_totals', 'modul_id'];

    public function modul() {
        return $this->belongsTo(Modul::class);
    }

    public function ras() {
        return $this->hasMany(RA::class);
    }
}
