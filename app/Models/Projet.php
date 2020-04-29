<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Projet
 * @package App\Models
 * @version April 29, 2020, 8:13 pm UTC
 *
 * @property string $client_id
 * @property string $nom
 * @property string $description
 * @property string $categorie
 * @property string $statut
 */
class Projet extends Model
{
    use SoftDeletes;

    public $table = 'projets';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'client_id',
        'nom',
        'description',
        'categorie',
        'statut'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'client_id' => 'string',
        'nom' => 'string',
        'description' => 'string',
        'categorie' => 'string',
        'statut' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
