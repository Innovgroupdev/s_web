<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Articles
 * @package App\Models
 * @version July 27, 2022, 8:32 pm UTC
 *
 * @property string $libelle
 * @property string $contenu
 * @property string $desc
 * @property string $tags
 * @property string $img
 * @property integer $user_id
 * @property boolean $state
 * @property integer $categorie_id
 */
class Articles extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'articles';

    /**
     * @return BelongsTo
     * @description get the category for the blog post.
     */
    public function categorie()
    {
        return $this->belongsTo(Categories::class, 'categorie_id');
    }


    /**
     * @return BelongsTo
     * @description get the category for the blog post.
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }


    /**
     * Get the comments for the blog article.
     */
    public function commentaires()
    {
        return $this->hasMany(Commentaire::class);
    }

    /**
     * Get the comments for the blog article.
     */
    public function getCommentairesValidCount()
    {
        $j = 0;
        $tab = $this->commentaires();
    //    dd($tab);
        foreach($tab as $articleCommentaire)
        {
            if($articleCommentaire->is_valid)
                {
                    $j ++;
                }
        }
       
        return $j;
  
    }


//    public function category()
//    {
//        return $this->belongsTo(Categories::class, "categorie_id");
//    }
//    public function getCategoryAttribute(){
//        return $this->category->with('id','categorie_id')->get();
//    }
//    protected $dates = ['deleted_at'];
//
//    public static function with($relations)
//    {
//        return parent::with($relations); //
//    }

    public $fillable = [
        'libelle',
        'desc',
        'tags',
        'img',
        'contenu',
        'state',
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
        'contenu' => 'string',
        'state' => 'boolean',
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
        'contenu' => 'required',
        'categorie_id' => 'required'
    ];


}
