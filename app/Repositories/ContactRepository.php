<?php

namespace App\Repositories;

use App\Models\Contact;
use App\Repositories\BaseRepository;

/**
 * Class ContactRepository
 * @package App\Repositories
 * @version April 29, 2020, 8:49 pm UTC
*/

class ContactRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'prenom',
        'nom',
        'tel',
        'email',
        'fonction',
        'description',
        'client_id'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Contact::class;
    }
}
