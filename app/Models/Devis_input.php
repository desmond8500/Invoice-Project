<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Devis_input
 * @package App\Models
 * @version May 4, 2020, 7:05 am UTC
 *
 * @property string $name
 * @property string $slug
 * @property string $description
 * @property string $prix
 * @property string $domaine
 * @property string $categorie
 */
class Devis_input extends Model
{

    public $table = 'devis_inputs';
    



    public $fillable = [
        'name',
        'slug',
        'description',
        'prix',
        'domaine',
        'categorie'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'slug' => 'string',
        'description' => 'string',
        'prix' => 'string',
        'domaine' => 'string',
        'categorie' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
