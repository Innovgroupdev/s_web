<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Categorie extends Model
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
        return $this->hasMany(Article::class);
    }


    /**
     * Get the post that owns the comment.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }


    protected $dates = ['deleted_at'];

//   public function getArticleAttribute(){
//       return $this->article->where('id', 'categorie_id')->get;
//   }

    public $fillable = [
        'lib',
        'des'
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