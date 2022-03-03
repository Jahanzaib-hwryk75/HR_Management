<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    use HasFactory;
    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'phonenumber',
        'alternativephone',
        'selectcountry',
        'city',
        'zipcode',
        'division',
        'positionname',
        'dutytype',
        'hiredate',
        'terminationdate',
        'terminationreason',
        'voluntarytermination',
        'rehiredate',
        'ratetype',
        'rate',
        'payfrequency',
        'payfrequencytext',
        'homedepartment',
        'homedepartmenttext',
        'dateofbirth',
        'gender',
        'maritalstatus',
        'workinstate',
        'lineinstate',
        'citizenship',
        'pictureupload',
        'homeemail',
        'homephone',
        'businessphone',
        'cellphone',
        'emergencycontact',
        'emergencyhome',
        'emergencycontactrelation',
        'alteremergencycontact',
        'alteremergencyphone',
        'emails',
        'password'
    ];
}
