<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profissionals extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'telefone', 'email', 'crm', 'categoria_id'];

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }

    public function consultas()
    {
        return $this->hasMany(Consulta::class);
    }
}
