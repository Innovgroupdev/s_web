<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oneinstancevisitor extends Model
{
    use HasFactory;
    protected $table = 'visiteurs';
<<<<<<< HEAD
    protected $fillable = ['ip_address', 'visit_date', 'visit_time','visit_month','visit_year','pays','ville','region','user_agent'];
=======
    protected $fillable = ['ip_adress','visit_date','visit_month'];
>>>>>>> f326303d97affd2feaa8ca395a0c95ed2dbe9667
}
