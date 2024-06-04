<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use App\Models\Consultas;


class Pacientes extends Model
{
    use HasFactory;

    protected $table = 'pacientes';
    protected $fillable = ['id', 'nome', 'telefone', 'email'];

    public function consultas()
    {
        return $this->hasMany(Consultas::class, 'paciente_id');
    }
}
