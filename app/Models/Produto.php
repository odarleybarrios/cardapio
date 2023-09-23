<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Produto extends Model
{
 public function categorias(){
   return $this->belongsTo(Categoria::class, 'categoria_id', 'id');
 } 
 
 public function empresa(){
    return $this->belongsTo(Empresa::class, 'empresa_id', 'id');
 }
 
}
