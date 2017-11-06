<?php

namespace parcial2;

use Illuminate\Database\Eloquent\Model;

class TipoProducto extends Model
{
  
  protected $table='tipo_producto';

  protected $primaryKey='idtipo_producto';

  public $timestamps=false;


  protected $fillable =[
    
    
    'nombre',
    'descripcion'
    
  ];

  protected $guarded =[

  ];
}
