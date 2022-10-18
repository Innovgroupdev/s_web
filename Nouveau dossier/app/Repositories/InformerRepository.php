<?php

namespace App\Repositories;

use App\Models\Informer;
use App\Repositories\BaseRepository;

/**
 * Class InformerRepository
 * @package App\Repositories
 * @version July 28, 2022, 6:41 pm UTC
*/

class InformerRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'email',
        'pays',
        'numero'
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
        return Informer::class;
    }
}
