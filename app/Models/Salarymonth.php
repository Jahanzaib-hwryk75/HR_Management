<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salarymonth extends Model
{
    use HasFactory;
    protected $fillable = [
        'salarymonth',
        'admin'
    ];
    
}
