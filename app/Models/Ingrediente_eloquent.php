<?php

namespace startcooking\Models;

use Illuminate\Database\Eloquent\Model;

class Ingrediente_eloquent extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'ing';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id_ing', 'nombre_ing', 'descripcion_ing'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['calorias'];
    
    protected function recetas() {
      //  $this->hasMany(Recetas, ---);
        
    }
}
