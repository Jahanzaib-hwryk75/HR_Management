<?php

namespace App\Imports;

use App\Models\employee;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Imports\HeadingRowFormatter;

class employeesImport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function headingRow(): int
    {
        return 1;
    }
    public function model(array $row)
    {
        HeadingRowFormatter::default('none');
        return new employee([
         
                'firstname' => (isset($row['firstname']) ? $row['firstname'] : ''),
                'lastname' => (isset($row['lastname']) ? $row['lastname'] : ''),
                'email' => (isset($row['email']) ? $row['email'] : ''),
                'phonenumber' => (isset($row['phonenumber']) ? $row['phonenumber'] : ''),
                'alternativephone' => (isset($row['alternativephone']) ? $row['alternativephone'] : ''),
                'selectcountry' => (isset($row['selectcountry']) ? $row['selectcountry'] : ''),
                'city' => (isset($row['city']) ? $row['city'] : ''),
                'zipcode' => (isset($row['zipcode']) ? $row['zipcode'] : ''),
                'division' => (isset($row['division']) ? $row['division'] : ''),
                'positionname' => (isset($row['positionname']) ? $row['positionname'] : ''),
                'dutytype' => (isset($row['dutytype']) ? $row['dutytype'] : ''),
                'hiredate' => (isset($row['hiredate']) ? $row['hiredate'] : ''),
                'terminationdate' => (isset($row['terminationdate']) ? $row['terminationdate'] : ''),
                'terminationreason' => (isset($row['terminationreason']) ? $row['terminationreason'] : ''),
                'voluntarytermination' => (isset($row['voluntarytermination']) ? $row['voluntarytermination'] : ''),
                'rehiredate' => (isset($row['rehiredate']) ? $row['rehiredate'] : ''),
                'ratetype' => (isset($row['ratetype']) ? $row['ratetype'] : ''),
                'rate' => (isset($row['rate']) ? $row['rate'] : ''),
                'payfrequency' => (isset($row['payfrequency']) ? $row['payfrequency'] : ''),
                'payfrequencytext' => (isset($row['payfrequencytext']) ? $row['payfrequencytext'] : ''),
                'homedepartment' => (isset($row['homedepartment']) ? $row['homedepartment'] : ''),
                'homedepartmenttext' => (isset($row['homedepartmenttext']) ? $row['homedepartmenttext'] : ''),
                'dateofbirth' => (isset($row['dateofbirth']) ? $row['dateofbirth'] : ''),
                'gender' => (isset($row['gender']) ? $row['gender'] : ''),
                'maritalstatus' => (isset($row['maritalstatus']) ? $row['maritalstatus'] : ''),
                'workinstate' => (isset($row['workinstate']) ? $row['workinstate'] : ''),
                'lineinstate' => (isset($row['lineinstate']) ? $row['lineinstate'] : ''),
                'citizenship' => (isset($row['citizenship']) ? $row['citizenship'] : ''),
                // 'pictureupload' => (isset($row['pictureupload']) ? $row['pictureupload'] : ''),
                'homeemail' => (isset($row['homeemail']) ? $row['homeemail'] : ''),
                'homephone' => (isset($row['homephone']) ? $row['homephone'] : ''),
                'businessphone' => (isset($row['businessphone']) ? $row['businessphone'] : ''),
                'cellphone' => (isset($row['cellphone']) ? $row['cellphone'] : ''),
                'emergencycontact' => (isset($row['emergencycontact']) ? $row['emergencycontact'] : ''),
                'emergencyhome' => (isset($row['emergencyhome']) ? $row['emergencyhome'] : ''),
                'emergencycontactrelation' =>(isset($row['emergencycontactrelation']) ? $row['emergencycontactrelation'] : ''),
                'alteremergencycontact' =>(isset($row['alteremergencycontact']) ? $row['alteremergencycontact'] : ''),
                'alteremergencyphone' =>(isset($row['alteremergencyphone']) ? $row['alteremergencyphone'] : ''),
                'emails' =>(isset($row['emails']) ? $row['emails'] : ''),
                'password' =>(isset($row['password']) ? $row['password'] : ''),
        ]);
    }
    
}
