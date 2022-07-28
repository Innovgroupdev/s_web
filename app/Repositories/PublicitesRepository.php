<?php

namespace App\Repositories;

use App\Models\Publicites;
use App\Repositories\BaseRepository;

/**
 * Class PublicitesRepository
 * @package App\Repositories
 * @version July 27, 2022, 11:31 am UTC
*/

class PublicitesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'libelle',
        'img_url',
        'user_id'
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
        return Publicites::class;
    }
}
