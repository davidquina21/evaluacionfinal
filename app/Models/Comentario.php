<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;



class Comentario extends Model
{
    protected $fillable = ['publicacion_id', 'user_id', 'contenido'];

    public function publicacion()
    {
        return $this->belongsTo(Publicacion::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function archivos()
    {
        return $this->hasMany(Archivo::class);
    }


}