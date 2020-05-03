<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Projet_categorie
 * @package App\Models
 * @version May 3, 2020, 6:19 am UTC
 *
 * @property string $categorie
 * @property string $description
 */
class Projet_categorie extends Model
{
    use SoftDeletes;

    public $table = 'projet_categories';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'categorie',
        'description'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'categorie' => 'string',
        'description' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
