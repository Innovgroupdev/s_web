<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
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
        return $this->belongsTo(Categorie::class);
    }


    /**
     * @return BelongsTo
     * @description get the category for the blog post.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }


    /**
     * Get the comments for the blog article.
     */
    public function commentaires()
    {
        return $this->hasMany(Commentaire::class);
    }

  
    public function getCommentairesValidCount()
    {
        $j = 0;
        $tab = $this->commentaires;
    
        foreach($tab as $articleCommentaire)
        {
            // dd($articleCommentaire);
            if($articleCommentaire->is_valid)
                {
                    $j ++;
                    // dd($j);
                }
        }
      
        return $j;
  
    }

    public $fillable = [
        'libelle',
        'desc',
        'tags',
        'img',
        'contenu',
        'state',
        'user_id',
        'nbvue',
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
        'nbvue' => 'integer',
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
