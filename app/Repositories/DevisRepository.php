<?php

namespace App\Repositories;

use App\Models\Devis;
use App\Repositories\BaseRepository;

/**
 * Class DevisRepository
 * @package App\Repositories
 * @version April 29, 2020, 8:39 pm UTC
*/

class DevisRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'projet_id',
        'reference',
        'statut',
        'body'
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
        return Devis::class;
    }
}
