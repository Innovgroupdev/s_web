<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Essayer
 * @package App\Models
 * @version July 28, 2022, 6:43 pm UTC
 *
 * @property string $nom
 * @property string $numero
 * @property string $email
 * @property string $pays
 * @property string $profession
 * @property string $raison
 */
class Essayer extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'essayers';

    protected $dates = ['deleted_at'];

    /**
    attributes for class Essayer
     */
    public $fillable = [
        'nom',
        'numero',
        'email',
        'pays',
        'profession',
        'raison'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nom' => 'string',
        'numero' => 'string',
        'email' => 'string',
        'pays' => 'string',
        'profession' => 'string',
        'raison' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nom' => 'required',
        'numero' => 'required',
//        'email' => 'required',
        'pays' => 'required',
        'profession' => 'required',
        'raison' => 'required'
    ];

}
