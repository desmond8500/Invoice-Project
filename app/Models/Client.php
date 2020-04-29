<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Client
 * @package App\Models
 * @version April 29, 2020, 8:09 pm UTC
 *
 * @property string $compte_id
 * @property string $nom
 * @property string $description
 * @property string $adresse
 */
class Client extends Model
{
    use SoftDeletes;

    public $table = 'clients';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'compte_id',
        'nom',
        'description',
        'adresse'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'compte_id' => 'string',
        'nom' => 'string',
        'description' => 'string',
        'adresse' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
