<?php

namespace App\Repositories;

use App\Models\Projet_categorie;
use App\Repositories\BaseRepository;

/**
 * Class Projet_categorieRepository
 * @package App\Repositories
 * @version May 3, 2020, 6:19 am UTC
*/

class Projet_categorieRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'categorie',
        'description'
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
        return Projet_categorie::class;
    }
}
