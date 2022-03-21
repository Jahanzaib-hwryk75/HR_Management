<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable = [
        'employee_id',
        'projectname',
        'clientname',
        // 'projectlead',
        'startdate',
        'enddate',
        'projectduration',
        'checkin',
        'checkout',
        'totaltime'
        
        
    ];
    public function getEmployee()
    {
        return $this->belongsTo(employee::class, 'employee_id', 'id');
        // return $this->hasMany(employee::class, 'id', 'employee_id');
    }
}
