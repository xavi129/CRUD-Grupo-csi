<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Employee;

class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Employee::create([
            'full_name' => 'John Doe',
            'email' =>  'John_Doe@gmail.com',
            'company' => 'ABC Company',
            'area' => 'Marketing',
            'department' => 'Sales',
            'position' => 'Sales Executive',
            'photo' => 'shahzaib.jpg',
            'hiring_date' => '2023-01-01',
            'status' => '1'
        ]);

        Employee::create([
            'full_name' => 'John Doe',
            'email' =>  'John@gmail.com',
            'company' => 'XYZ Company',
            'area' => 'Finance',
            'department' => 'Accounts',
            'position' => 'Accountant',
            'photo' => 'media.jpg',
            'hiring_date' => '2023-02-01',
            'status' => '0'
        ]);

        Employee::create([
            'full_name' => 'John Doe',
            'email' =>  'JohnDoe@gmail.com',
            'company' => 'PQR Company',
            'area' => 'HR',
            'department' => 'Recruitment',
            'position' => 'HR Manager',
            'photo' => 'muhammad.jpg',
            'hiring_date' => '2023-03-01',
            'status' => '1'
        ]);

    }
}
