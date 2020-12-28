<?php

use Illuminate\Database\Seeder;

class EmployeesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employees')->insert([
            [
                'fullname'=>'Jonh Doe',
                'gender'=>'Male',
                'email'=>'test@gmail.com',
                'tel'=>'022225855',
                'age'=>30,
                'address'=>'8/88 moo 8 bangkok',
                'birthday'=>'24/8/1995',
                'avatar'=>'noavatar.png',
                'employment'=>'นักพัฒนาระบบ',
                'status'=>1
                
            ],
            [
                'fullname'=>'Gun Supa',
                'gender'=>'Male',
                'email'=>'test3@gmail.com',
                'tel'=>'022225855',
                'age'=>30,
                'address'=>'5/88 moo 8 bangkok',
                'birthday'=>'02/12/1994',
                'avatar'=>'noavatar.png',
                'employment'=>'บัญชี',
                'status'=>1
                
            ],
            [
                'fullname'=>'Mara Mai',
                'gender'=>'Male',
                'email'=>'test2@gmail.com',
                'tel'=>'025555855',
                'age'=>30,
                'address'=>'10/88 moo 8 bangkok',
                'birthday'=>'10/6/1990',
                'avatar'=>'noavatar.png',
                'employment'=>'ผู่ช่วยผู้จัดการ',
                'status'=>1
                
            ]

        ]);
    }
}
