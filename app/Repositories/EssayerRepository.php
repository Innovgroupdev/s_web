<?php

namespace App\Repositories;

use App\Models\Essayer;
use App\Repositories\BaseRepository;

/**
 * Class EssayerRepository
 * @package App\Repositories
 * @version July 28, 2022, 6:43 pm UTC
*/

class EssayerRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nom',
        'numero',
        'email',
        'pays',
        'profession',
        'raison'
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
        return Essayer::class;
    }
}
