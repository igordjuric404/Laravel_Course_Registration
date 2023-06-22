<?php

namespace App\Http\Controllers;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function coursesAllUser(){
        $courses = Course::all();
        return view('user.courses_all', ['courses' => $courses]);
    }

    public function courseInput(){
        return view('admin.courses.course_new');
    }

    public function courseSend(Request $request){
        $course = new Course();
        $course->name = $request->input('name');
        $course->max_number_of_applicants = $request->input('max_number_of_applicants');
        $course->description = $request->input('description');
        $course->save();

        return redirect( route('admin.courses.course_all') );
    }

    public function courseSingle($id){
        $course = Course::find($id);
        return view('admin.courses.course_single', ['course' => $course]);
    }

    public function courseChangeStatus(Request $request, $id){
        $course = Course::find($id);
        $course->name = $request->input('name');
        $course->number_of_applicants = $request->input('number_of_applicants');
        $course->max_number_of_applicants = $request->input('max_number_of_applicants');
        $course->description = $request->input('description');

        $course->save();
        return redirect( route('courses-all') );
    }

    public function courseDelete($id){
        $course = Course::find($id);
        $course->delete();        

        return redirect(route('courses-all'));
    }

    public function coursesAllAdmin(){
        $courses = Course::all();
        return view('admin.courses.courses_all', ['courses' => $courses]);
    }


}
