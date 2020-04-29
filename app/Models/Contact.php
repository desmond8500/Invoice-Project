<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Contact
 * @package App\Models
 * @version April 29, 2020, 8:49 pm UTC
 *
 * @property string $prenom
 * @property string $nom
 * @property string $tel
 * @property string $email
 * @property string $fonction
 * @property string $description
 * @property string $client_id
 */
class Contact extends Model
{
    use SoftDeletes;

    public $table = 'contacts';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'prenom',
        'nom',
        'tel',
        'email',
        'fonction',
        'description',
        'client_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'prenom' => 'string',
        'nom' => 'string',
        'tel' => 'string',
        'email' => 'string',
        'fonction' => 'string',
        'description' => 'string',
        'client_id' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
