<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
    use HasFactory;

    protected $table = 'visitslog';

    protected $fillable = ['ip_address', 'visit_date', 'visit_time','visit_month','visit_year','pays','ville','region','user_agent'];
}