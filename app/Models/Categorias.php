<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Categorias extends Model
{
    use HasFactory;


    protected $fillable = ['nome'];

    public function profissional()
    {
        return $this->hasMany(Profissional::class);
    }
}
