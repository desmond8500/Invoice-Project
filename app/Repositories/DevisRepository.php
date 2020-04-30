<?php

namespace App\Repositories;

use App\Models\Devis;
use App\Repositories\BaseRepository;

/**
 * Class DevisRepository
 * @package App\Repositories
 * @version April 30, 2020, 1:25 pm UTC
*/

class DevisRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'projet_id',
        'reference',
        'description',
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
