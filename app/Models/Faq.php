<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Faq
 * @package App\Models
 * @version August 8, 2022, 3:53 pm UTC
 *
 * @property string $pays
 * @property string $email
 * @property integer $tel
 * @property string $question
 */
class Faq extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'faqs';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'pays',
        'email',
        'tel',
        'question'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'pays' => 'string',
        'email' => 'string',
        'tel' => 'integer',
        'question' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'pays' => 'required',
        'email' => 'required|',
        'tel' => 'required|integer',
        'question' => 'required'
    ];


}
