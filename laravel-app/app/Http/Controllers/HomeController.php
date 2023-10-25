<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Psy\Sudo;

class HomeController extends Controller
{
    public function index(){
        //DB
        //1. Raw sql using db facade
        //$users = DB::select('select * from users');
        
        // 2. querry builder
        //$users = DB::table('users')->select(['name', 'email'])->whereNotNull('email')->orderBy('name')->get();
        
        //3. Eloquent ORM better
       $students = Student::all();     
        foreach ($students as $student) {
           echo $student->name. '<br>' ;
        }

        //insert
       /*
        $student = new Student();
        $student->name = 'Matata';
        $student->email =' matata@x.com';
        $student->save();
        */

    }
}
