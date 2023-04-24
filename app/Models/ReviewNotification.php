<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReviewNotification extends Model
{
    use HasFactory;
    protected $fillable = ['requestID','reviewedPerson','requestOpened','reviewedCount','userId','updated_at','created_at'];

}
