<?php

namespace App\Exports;

use App\Models\employee;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class employeesExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return employee::select('firstname',
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
        'password')->get();
    }
    public function headings(): array
    {
        return [
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
}
