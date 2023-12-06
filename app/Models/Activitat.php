<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activitat extends Model {
    protected $fillable = ['titol', 'descripcio', 'programacio_id', 'modul_id', 'uf_id'];

    public function programacio() {
        return $this->belongsTo(Programacio::class);
    }

    public function modul() {
        return $this->belongsTo(Modul::class);
    }

    public function uf() {
        return $this->belongsTo(UF::class);
    }
}
