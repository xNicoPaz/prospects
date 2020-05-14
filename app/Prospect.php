<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prospect extends Model
{
    /**
     * Suelo usar en todos los modelos una constante
     * a modo de "propiedad estatica de solo lectura"
     * para usarla en las migrations y en donde
     * necesite.
     */
    const TABLE_NAME = 'prospects';

    protected $guarded = ['id'];
}
