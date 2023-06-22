<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registration;
use App\Models\Contact;
use App\Models\Course;

class AdminController extends Controller
{
    public function registrationsAll(){
        $registrations_all = Registration::all();
        $courses_all = Course::all();
        return view('admin.registrations', ['registrations_all' => $registrations_all, 'courses_all' => $courses_all]);
    }

    public function registrationSingle($id){
        $registration = Registration::find($id);
        return view('admin.registration', ['registration' => $registration]);
    }

    public function registrationChangeStatus(Request $request, $id){
        $registration = Registration::find($id);
        $registration->status = $request->input('status', '0');
        $registration->save();
        return redirect( route('registrations-all') );
    }

    public function registrationDelete($id){
        $registration = Registration::find($id);
        $registration->delete();

        $course_id = $registration->course_id;
        $course = Course::find($course_id);
        $course->number_of_applicants = $course->number_of_applicants - 1;
        $course->save();

        return redirect(route('registrations-all'));
    }

    public function registrationSortCourse($course_id){
        $registrations_all = Registration::where('course_id', '=', $course_id)->get();
        $courses_all = Course::all();
        return view('admin.registrations', ['registrations_all' => $registrations_all, 'courses_all' => $courses_all]);    
    }
    
    public function registrationSortStatus($status){
        $registrations_all = Registration::where('status', '=', $status)->get();
        $courses_all = Course::all();
        return view('admin.registrations', ['registrations_all' => $registrations_all, 'courses_all' => $courses_all]);    
    }

}
