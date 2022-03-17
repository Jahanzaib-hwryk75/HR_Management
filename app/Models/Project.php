<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable = [
        'projectname',
        'clientname',
        'projectlead',
        'startdate',
        'enddate',
        'projectduration',
        'checkin',
        'checkout',
        'totaltime',
        'employee_id'
        
    ];
    public function getEmployee()
    {
        return $this->hasMany(employee::class, 'id', 'employee_id');
    }
}
