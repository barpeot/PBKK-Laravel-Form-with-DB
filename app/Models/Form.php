<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    protected $table = 'Form';
    protected $fillable = ['email', 'password', 'name', 'bounty', 'image'];
}
