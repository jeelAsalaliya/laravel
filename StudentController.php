<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Students;

class StudentController extends Controller
{
    public function showStudents()
    {
        $students = students::select('students.*', 'cities.city_name')
            ->join('cities', 'students.city', '=', 'cities.id')
            ->select(('count(*) as student_count'), 'age')
            ->groupBy('age')
            ->get();

        //return $students;
        return view('welcome', compact('students'));
    }

    public function uniondata()
    {
        $lecturers = lecturers::get();
        $students = students::get()->union($lecturers);
        return $students;
    }

    public function whendata()
    {
        $test = false;

        $students = students::when(false, function ($query) {
            $query->where('age', '>', 20);
        }, function ($query) {
            $query->where('age', '<', 20);
        })->get();

        return $students;
    }

    public function chunkdata()
    {
        $students = Students::orderBy('id')
            ->chunk(3, function ($students) {
                echo "<div style='border:1px solid red; margin-bottom:15px;'>";

                foreach ($students as $student) {
                    students::where('id', $student->id)
                        ->update(['status' => true]);
                }
            });
    }
}
