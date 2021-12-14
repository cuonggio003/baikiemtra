<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;
    protected $table ='hotels';
    protected $primaryKey = 'id';
    protected $fillable = ['id','group','name',	'birthday',	'sex','phone','people_id','email','address'];
}
