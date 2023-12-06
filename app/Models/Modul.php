<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modul extends Model {
    protected $fillable = ['nom', 'descripcio', 'hores_totals'];

    public function ufs() {
        return $this->hasMany(UF::class);
    }
}