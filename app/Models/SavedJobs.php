<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SavedJobs extends Model
{
    use HasFactory;
    protected $fillable = ['jobId','userId','updated_at','created_at'];
}
