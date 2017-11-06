<?php

namespace parcial2;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
  
  protected $table='producto';

  protected $primaryKey='idproducto';

  public $timestamps=false;


  protected $fillable =[
    'idtipo_producto',
    'nombre',
    'descripcion',
    'stock'
  ];

  protected $guarded =[

  ];
}
