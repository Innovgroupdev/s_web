<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FuturUser extends Model
{
    use HasFactory;

    protected $table = "futursutilisateurs";
    protected $fillable=['email','pays'];
}
