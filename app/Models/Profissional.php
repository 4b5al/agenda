<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Categorias;
use App\Models\Consultas;
use Carbon\Carbon;

class Profissional extends Model
{
    use HasFactory;

    protected $table = 'profissionals';

    protected $fillable = ['nome', 'telefone', 'email', 'crm', 'categoria_id'];

    public function categorias()
    {
        return $this->belongsTo(Categorias::class, 'categoria_id');
    }

    public function consultas()
    {
        return $this->hasMany(Consultas::class, 'profissional_id');
    }
}
