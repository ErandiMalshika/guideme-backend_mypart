<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoneNotification extends Model
{
    use HasFactory;
    protected $fillable = ['jobImgUrl','jobtitle','userId','updated_at','created_at'];
}
