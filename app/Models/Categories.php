<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
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

    /**
     * @return HasMany
     * @description get all articles for the category
     */
    public function articles()
    {
        return $this->hasMany(Articles::class);
    }

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
        'lib' => 'required|min:3',
        'desc' => 'required|min:5'
    ];


}
