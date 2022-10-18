<?php

namespace App\Repositories;

use App\Models\Commentaire;
use App\Repositories\BaseRepository;

/**
 * Class CommentaireRepository
 * @package App\Repositories
 * @version July 29, 2022, 11:48 am UTC
*/

class CommentaireRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'description',
        'name',
        'email',
        'is_valid'
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
        return Commentaire::class;
    }
}
