<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class exercise extends Model
{
    use HasFactory;
    protected $fillable = ['std_id','date','degree','created_at'];

}
