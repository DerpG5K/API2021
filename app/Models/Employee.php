<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'employeeFirstName',
        'employeeLastName',
        'employeeMailAddress',
        'employeePhoneNumber',
        'employeePassword',
        'employeeSalary',
        'employeeJobID',
        'employeeBirthDate',
        'employeeIsAdmin'
    ];
}
