<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Register2 extends Model
{
    use HasFactory;

    protected $fillable = ['weight_now', 'weight_target'];
}
