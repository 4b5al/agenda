<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Profissional;
use App\Models\Pacientes;
use Carbon\Carbon;


class Consultas extends Model
{
    use HasFactory;

    protected $fillable = ['paciente_id', 'profissional_id', 'data', 'hora'];

    public function pacientes()
    {
        return $this->belongsTo(Pacientes::class);
    }

    public function profissional()
    {
        return $this->belongsTo(Profissional::class);
    }
}
