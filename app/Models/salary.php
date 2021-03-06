<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class salary extends Model
{
    use HasFactory;
    protected $fillable = [
        'employee_id',
        'salarytype',
        'basic',
        'health',
        'houserent',
        'bonus'=>'required',
        'newaddition',
        'pf',
        'newdeduction',
        'tax',
        'grosssalary'
    ];
    public function getEmployee()
    {
        return $this->belongsTo(employee::class, 'employee_id', 'id');
    }
}
