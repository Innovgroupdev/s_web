<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Categories
 * @package App\Models
 * @version July 27, 2022, 12:20 am UTC
 *
 * @property string $lib
 * @property string $desc
 */
class Categories extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'categories';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'lib',
        'desc'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'lib' => 'string',
        'desc' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'lib' => 'required',
        'desc' => 'img string text'
    ];


}
