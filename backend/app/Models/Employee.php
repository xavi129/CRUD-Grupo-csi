<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    
    public $timestamps = true;
    protected $fillable = ['full_name', 'company', 'area', 'email', 'department', 'position', 'photo', 'hiring_date', 'status'];


    protected $dates = ['hiring_date']; 
}
