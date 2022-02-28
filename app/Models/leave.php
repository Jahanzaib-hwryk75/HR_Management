<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class leave extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'rank',
        'type',
        'datestart',
        'dateend',
        'desc',
        'status',
        'approvedstartdate',
        'approvedenddate',
        'applyday',
        'approvedday'
    ];
}
