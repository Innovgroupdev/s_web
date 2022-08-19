<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Commentaire
 * @package App\Models
 * @version July 29, 2022, 11:48 am UTC
 *
 * @property string $description
 * @property string $name
 * @property string $email
 * @property string $article_id
 * @property boolean $is_valid
 */
class Commentaire extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'commentaires';


    protected $dates = ['deleted_at'];


    /**
     * Get the article that owns the comment.
     */
    public function article()
    {
        return $this->belongsTo(Article::class, 'article_id');
    }

    public $fillable = [
        'description',
        'name',
        'email',
        'article_id',
        'is_valid'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'description' => 'string',
        'name' => 'string',
        'email' => 'string',
        'article_id' => 'string',
        'is_valid' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
//       'description' => 'required',
//       'name' => 'required',
//       'email' => 'required'
    ];

}
