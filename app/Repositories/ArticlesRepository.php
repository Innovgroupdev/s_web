<?php

namespace App\Repositories;

use App\Models\Articles;
use App\Repositories\BaseRepository;

/**
 * Class ArticlesRepository
 * @package App\Repositories
 * @version July 27, 2022, 8:32 pm UTC
*/

class ArticlesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'libelle',
        'desc',
        'tags',
        'img'
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
        return Articles::class;
    }
}
