<?php

namespace App\Imports;

use App\Models\employee;
use Maatwebsite\Excel\Concerns\ToModel;

class employeesImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
      
        return new employee([
                'firstname' => (isset($row[1]) ? $row[1] : ''),
                'lastname' => (isset($row[2]) ? $row[2] : ''),
                'email' => (isset($row[3]) ? $row[3] : ''),
                'phonenumber' => (isset($row[4]) ? $row[4] : ''),
                'alternativephone' => (isset($row[5]) ? $row[5] : ''),
                'selectcountry' => (isset($row[6]) ? $row[6] : ''),
                'city' => (isset($row[7]) ? $row[7] : ''),
                'zipcode' => (isset($row[8]) ? $row[8] : ''),
                'division' => (isset($row[9]) ? $row[9] : ''),
                'positionname' => (isset($row[10]) ? $row[10] : ''),
                'dutytype' => (isset($row[11]) ? $row[11] : ''),
                'hiredate' => (isset($row[12]) ? $row[12] : ''),
                'terminationdate' => (isset($row[13]) ? $row[13] : ''),
                'terminationreason' => (isset($row[14]) ? $row[14] : ''),
                'voluntarytermination' => (isset($row[15]) ? $row[15] : ''),
                'rehiredate' => (isset($row[16]) ? $row[16] : ''),
                'ratetype' => (isset($row[17]) ? $row[17] : ''),
                'rate' => (isset($row[18]) ? $row[18] : ''),
                'payfrequency' => (isset($row[19]) ? $row[19] : ''),
                'payfrequencytext' => (isset($row[20]) ? $row[20] : ''),
                'homedepartment' => (isset($row[21]) ? $row[21] : ''),
                'homedepartmenttext' => (isset($row[22]) ? $row[22] : ''),
                'dateofbirth' => (isset($row[23]) ? $row[23] : ''),
                'gender' => (isset($row[24]) ? $row[24] : ''),
                'maritalstatus' => (isset($row[25]) ? $row[25] : ''),
                'workinstate' => (isset($row[26]) ? $row[26] : ''),
                'lineinstate' => (isset($row[27]) ? $row[27] : ''),
                'citizenship' => (isset($row[28]) ? $row[28] : ''),
                'pictureupload' => (isset($row[29]) ? $row[29] : ''),
                'homeemail' => (isset($row[30]) ? $row[30] : ''),
                'homephone' => (isset($row[31]) ? $row[31] : ''),
                'businessphone' => (isset($row[32]) ? $row[32] : ''),
                'cellphone' => (isset($row[33]) ? $row[33] : ''),
                'emergencycontact' => (isset($row[34]) ? $row[34] : ''),
                'emergencyhome' => (isset($row[35]) ? $row[35] : ''),
                'emergencycontactrelation' =>(isset($row[36]) ? $row[36] : ''),
                'alteremergencycontact' =>(isset($row[37]) ? $row[37] : ''),
                'alteremergencyphone' =>(isset($row[38]) ? $row[38] : ''),
                'emails' =>(isset($row[39]) ? $row[39] : ''),
                'password' =>(isset($row[40]) ? $row[40] : ''),
        ]);
    }
}
