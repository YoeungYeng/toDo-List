<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    /** @use HasFactory<\Database\Factories\TaskControllerFactory> */
    use HasFactory;
    protected $connection = 'd1';
    protected $table = 'tasks';
    protected $fillable = ['name'];
   
}
