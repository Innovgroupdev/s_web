<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oneinstancevisitor extends Model
{
    use HasFactory;
    protected $table = 'visiteurs';
    protected $fillable = ['ip_adress','visit_date','visit_month'];
}
