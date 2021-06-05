<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentsController extends Controller
{
    //

    public function addStudent(Request $request)
    {
    	$Student = new Student;
        $Student->name = $request->get('name');
        $Student->name = $request->get('surname');
        $Student->name = $request->get('description');

        $Student->save();
        return $Student;
    }
}
