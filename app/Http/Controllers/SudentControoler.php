<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Student;
use Illuminate\Http\Request;

class SudentControoler extends Controller
{
 //   /**
  //   * Display a listing of the resource.
  //   *
  //   * @return \Illuminate\Http\Response
  //   */
    public function index()
    {
        $students = Student::all();
        return view('student.index',[
            'students' =>$students
        ]);
        //return $student;
    }

   // /**
  //   * Show the form for creating a new resource.
  //   *
  //   * @return \Illuminate\Http\Response
  //   */
    public function create()
    {
        return view('student.create');
    }

 //   /**
 //    * Store a newly created resource in storage.
 //    *
  //   * @param  \Illuminate\Http\Request  $request
   //  * @return \Illuminate\Http\Response
    // */
    public function store(Request $request)
    {
        $newStudent = Student::create([
            'name' => $request->name,
            'father' => $request->father,
            'avg' => $request->avg,
        ]);
        return redirect('student/'.$newStudent->id);
    }

 //   /**
 //    * Display the specified resource.
 //    *
  //   * @param  \App\Models\Student  $student
    // * @return \Illuminate\Http\Response
  //   */
    public function show(Student $student_id)
    {
        return view('student.show',[
            'student' => $student_id
        ]);
        //return $student_id;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }
}
