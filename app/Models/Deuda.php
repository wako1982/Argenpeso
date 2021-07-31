<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deuda extends Model
{
    protected $guarded=[];
    use HasFactory;

    public function provedores(){
        return $this->hasMany(Deuda::class);
    }
}
