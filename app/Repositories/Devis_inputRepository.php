<?php

namespace App\Repositories;

use App\Models\Devis_input;
use App\Repositories\BaseRepository;

/**
 * Class Devis_inputRepository
 * @package App\Repositories
 * @version May 4, 2020, 7:05 am UTC
*/

class Devis_inputRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'slug',
        'description',
        'prix',
        'domaine',
        'categorie'
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
        return Devis_input::class;
    }
}
