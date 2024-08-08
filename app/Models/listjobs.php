<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class listjobs extends Model
{
    protected $fillable = [
      'title',
      'company',
      'email',
      'description',
  ];
    use HasFactory;
}
