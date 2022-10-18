<?php

namespace App\Repositories;

use App\Models\New;
use App\Repositories\BaseRepository;

/**
 * Class NewRepository
 * @package App\Repositories
 * @version July 28, 2022, 6:38 pm UTC
*/

class NewRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'email'
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
        return New::class;
    }
}
