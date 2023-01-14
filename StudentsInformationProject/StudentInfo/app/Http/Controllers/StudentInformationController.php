<?php

namespace App\Http\Controllers;

use App\Models\StudentInformation;
use Illuminate\Http\Request;

class StudentInformationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return StudentInformation::all();
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        return StudentInformation::create([
            'student_fname' => $request->student_fname,
            'student_lname' => $request->student_lname,
            'student_age' => $request->student_age,
            'student_course' => $request->student_course,
            'student_address' => $request->student_address
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return StudentInformation::findOrfail($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
          return StudentInformation::find($id)->update([
            'student_fname' => $request->student_fname,
            'student_lname' => $request->student_lname,
            'student_age' => $request->student_age,
            'student_course' => $request->student_course,
            'student_address' => $request->student_address
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return StudentInformation::find($id)->delete();
    }
}