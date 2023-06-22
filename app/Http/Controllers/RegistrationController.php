<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registration;
use App\Models\Contact;
use App\Models\Course;

class RegistrationController extends Controller
{

    public function registrationInput(){
        return view('user.registration_new');
    }

    public function registrationSend(Request $request){
        $registration = new Registration();
        $registration->name_surname = $request->input('name_surname');
        $registration->email = $request->input('email');
        $registration->phone = $request->input('phone');
        $registration->address = $request->input('address');
        $registration->date = $request->input('date');
        $registration->course_id = $request->input('course_id');
        $registration->status = 0;

        $course_id = $request->input('course_id');
        $course = Course::find($course_id);
        $course->number_of_applicants = $course->number_of_applicants + 1;

        $course->save();
        $registration->save();

        return redirect( route('home') );
    }

    public function registrationInputIDInput($id){
        return view('user.registration_new_id', ['id' => $id]);
        
    }

    public function registrationInputIDSend(Request $request, $id){
        $registration = new Registration();
        $registration->name_surname = $request->input('name_surname');
        $registration->email = $request->input('email');
        $registration->phone = $request->input('phone');
        $registration->address = $request->input('address');
        $registration->date = $request->input('date');
        $registration->course_id = $id;
        $registration->status = 0;

        $course = Course::find($id);
        $course->number_of_applicants = $course->number_of_applicants + 1;
        $course->save();
        
        $registration->save();

        return redirect( route('home') );
    }

    public function registrationsAll(){
        $registrations_all = Registration::all();
        $courses_all = Course::all();
        return view('admin.registrations.registrations_all', ['registrations_all' => $registrations_all, 'courses_all' => $courses_all]);
    }

    public function registrationSingle($id){
        $registration = Registration::find($id);
        return view('admin.registrations.registration_single', ['registration' => $registration]);
    }

    public function registrationcChangeStatus(Request $request, $id){
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
        return view('admin.registrations.registrations_all', ['registrations_all' => $registrations_all, 'courses_all' => $courses_all]);    
    }
    
    public function registrationSortStatus($status){
        $registrations_all = Registration::where('status', '=', $status)->get();
        $courses_all = Course::all();
        return view('admin.registrations.registrations_all', ['registrations_all' => $registrations_all, 'courses_all' => $courses_all]);    
    }

    public function contactInput(){
        return view('user.contact_new');
    }

    public function contactSend(Request $request){
        $registration = new Contact();
        $registration->name_surname = $request->input('name_surname');
        $registration->email = $request->input('email');
        $registration->comment = $request->input('comment');
        $registration->status = 0;

        $registration->save();

        return redirect( route('home') );
    }


}
