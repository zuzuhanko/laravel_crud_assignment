<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employeeList extends Model
{
    use HasFactory;
    protected $fillable =[
        'employee_id',
        'first_name',
        'last_name',
        'job',
        'phone',
        'address',
        'age',


    ];

}
