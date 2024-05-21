<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\categorias;
use App\Models\Consultas;
use Carbon\Carbon;

class Profissional extends Model
{
    use HasFactory;

    
    protected $fillable = [
        'nome',
        'telefone',
        'email',
        'crm',
        'categoria_id'
    ];

    public function categorias()
    {
        return $this->belongsTo(Categorias::class);
    }

    public function consultas()
    {
        return $this->hasMany(Consultas::class);
    }
}
