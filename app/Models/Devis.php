<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Devis
 * @package App\Models
 * @version April 30, 2020, 1:25 pm UTC
 *
 * @property string $projet_id
 * @property string $reference
 * @property string $description
 * @property string $statut
 * @property string $body
 */
class Devis extends Model
{
    use SoftDeletes;

    public $table = 'devis';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'projet_id',
        'reference',
        'description',
        'statut',
        'body'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'projet_id' => 'string',
        'reference' => 'string',
        'description' => 'string',
        'statut' => 'string',
        'body' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
