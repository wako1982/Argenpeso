<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reporte extends Model
{
    protected $guarded=[];
    use HasFactory;

    public function deudas(){
        return $this->hasMany(Deudas::class);
    }
}
