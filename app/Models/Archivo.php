<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Archivo extends Model
{
    protected $fillable = ['comentario_id', 'archivo'];

    public function comentario()
    {
        return $this->belongsTo(Comentario::class);
    }
}