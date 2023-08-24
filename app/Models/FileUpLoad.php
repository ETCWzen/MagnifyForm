<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FileUpLoad extends Model
{
    protected $fillable = ['name', 'file_path'];
    use HasFactory;
}
