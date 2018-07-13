<?php

namespace sisHospital;

use Illuminate\Database\Eloquent\Model;

class Programa extends Model
{
   protected $table='programa';
   protected $primaryKey='idPrograma';


   /* public $timestamps=false; es para indicar que no utilizaremos 'updated_at' o 'created_at' */
   public $timestamps=false;
   


/*paso 4 - indicar las tablas de la base de datos al modelo*/

   protected $fillable = [
      'Fecha_Fin',
      'Fecha_Inicio',
      
   ];

   protected $guarded =[


   ];
}