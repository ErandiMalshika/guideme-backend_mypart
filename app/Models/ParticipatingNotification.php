<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParticipatingNotification extends Model
{
    use HasFactory;
    protected $fillable = ['consultant','date','duration','regarding','userId','updated_at','created_at'];
}
