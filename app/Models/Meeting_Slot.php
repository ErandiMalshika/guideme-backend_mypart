<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meeting_Slot extends Model
{
    use HasFactory;
    protected $fillable = ['time_slot','meeting_link','userId','updated_at','created_at'];
}
