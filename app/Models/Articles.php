<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Articles
 * @package App\Models
 * @version July 27, 2022, 8:32 pm UTC
 *
 * @property string $libelle
 * @property string $desc
 * @property string $tags
 * @property string $img
 * @property integer $user_id
 * @property integer $categorie_id
 */
class Articles extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'articles';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'libelle',
        'desc',
        'tags',
        'img',
        'user_id',
        'categorie_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'libelle' => 'string',
        'desc' => 'string',
        'tags' => 'string',
        'img' => 'string',
        'user_id' => 'integer',
        'categorie_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'libelle' => 'required',
        'desc' => 'required',
        'tags' => 'required',
        'user_id' => 'required',
        'categorie_id' => 'required'
    ];

    
}
