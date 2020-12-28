<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class BasicController extends Controller
{
    //ฟังก์ชัน home
    public function home(){
        return  view('pages.home');
    }
    //ฟังก์ชัน about
    public function about(){
        return  view('pages.about');
    }
    //ฟังก์ชัน service
    public function service(){
        return view('pages.service');
    }
    //ฟังก์ชัน portfolio
    public function portfolio(){
        return "Portfolio page";
    }
    //ฟังก์ชัน blog
    public function blog(){
        return "Blog page";
    }
    //ฟังก์ชัน contact
    public function contact(){
        return view('pages.contact');
    }
    //ฟังก์ชัน login
    public function login(){
        return view('pages.login');
    }

    //ฟังก์ชัน อ่านข้อมูล employees
    public function employees(){
        // $emp = DB::table('employees')->get(); //เลือกทั้งหมด
        // $emp = DB::table('employees')->get(['id','fullname','email']); //เลือกบางตัว

        //WHERE
        // $emp = DB::table('employees')->where('id',3)->get(['id','fullname','email']);เลือกบางตัว จากไอดี 3

        //First Record
        // $emp = DB::table('employees')->first(['fullname','email']); //LIMIT 1

        //Find(id)
        // $emp = DB::table('employees')->find([2]);

        //WHERE มากกว่า 1
        /*$emp = DB::table('employees')
                ->where('id',3)
                ->where('age',30)
                ->get(['id','fullname','email']);

        */
        //Aggregates
        // $emp = DB::table('employees')->count();//นับจำนวนรายการใน table
        // $emp = DB::table('employees')->max('age');//สูงสุด
        // $emp = DB::table('employees')->min('age');//ต่ำสุด
        // $emp = DB::table('employees')->avg('age');//ค่าเฉลี่ย

        //เช็คข้อมูล
        // $emp = DB::table('employees')->where('id',2)->exists();
       
        //orderby and limit
        // $emp = DB::table('employees')->orderByDesc('email')
        //                             ->limit(2)
        //                             ->get();

        // echo"<pre>";
        // print_r($emp);
        // echo"</pre>";


        //insert ข้อมูล
        // $data_emp = array(
        //     'fullname' => 'Gunn',
        //     'gender' => 'Male',
        //     'email' => 'Gunn@gmail.com',
        //     'age' => 30,
        //     'tel' => '0222',
        //     'address' => '20/2 222',
        //     'avatar' => 'noavatar.png',
        //     'status' => 1,
        // );

        // $emp = DB::table('employees')->insert($data_emp);


        // ส่งค่าไปยัง View
        $emps = DB::table('employees')->get();

        // foreach($emps as $emp){
        //     echo $emp->email.$emp->age."<br>";
        // }
        return view('pages.employee')->with('emps',$emps);

    }

}
