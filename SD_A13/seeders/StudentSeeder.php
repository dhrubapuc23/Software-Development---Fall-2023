<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\student;
class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        student::create([
            'name'=>'abcd',
            'email'=>'abcd@gmail.com',
            'city'=>'Dhaka',
            'contactNo'=>1234545
        ]);
    }
}
