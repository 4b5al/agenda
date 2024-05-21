<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Pacientes extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'telefone', 'email'];

    public function consultas()
    {
        return $this->hasMany(Consultas::class);
    }
}
