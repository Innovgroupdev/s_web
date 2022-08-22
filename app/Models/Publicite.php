<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Publicite
 * @package App\Models
 * @version July 27, 2022, 11:31 am UTC
 *
 * @property string $libelle
 * @property string $img_url
 * @property integer $user_id
 */
class Publicite extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'publicites';

    protected $dates = ['deleted_at'];

    /**
    attributes for class advertising
     */
    public $fillable = [
        'libelle',
        'img_url',
        'user_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'libelle' => 'string',
        'img_url' => 'string',
        'user_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'libelle' => 'required',
        'img_url' => 'required',
        'user_id' => 'required'
    ];

}

