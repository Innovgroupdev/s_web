<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class New
 * @package App\Models
 * @version July 28, 2022, 6:38 pm UTC
 *
 * @property string $email
 */
class New extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'news';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'email'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'email' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'email' => 'required'
    ];

    
}
