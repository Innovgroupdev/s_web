<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Informer
 * @package App\Models
 * @version July 28, 2022, 6:41 pm UTC
 *
 * @property string $email
 * @property string $pays
 * @property string $numero
 */
class Informer extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'informers';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'email',
        'pays',
        'numero'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'email' => 'string',
        'pays' => 'string',
        'numero' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'email' => 'required',
        'pays' => 'required',
        'numero' => 'required'
    ];

    
}
