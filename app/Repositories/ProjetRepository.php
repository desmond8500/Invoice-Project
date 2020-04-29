<?php

namespace App\Repositories;

use App\Models\Projet;
use App\Repositories\BaseRepository;

/**
 * Class ProjetRepository
 * @package App\Repositories
 * @version April 29, 2020, 8:13 pm UTC
*/

class ProjetRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'client_id',
        'nom',
        'description',
        'categorie',
        'statut'
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
        return Projet::class;
    }
}
