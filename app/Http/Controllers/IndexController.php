<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use App\Models\Exams;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $courses = $this->threeCourses();
        $exams = $this->threeExams();
        return view('index',["courses" => $courses, "exams" => $exams]);
    }
    public function threeCourses()
    {
        return Courses::select()->where('state','valid')->orderByDesc('created_at')->limit(3)->get();
    }
    public function threeExams()
    {
        return Exams::select()->where('state','valid')->orderByDesc('created_at')->limit(3)->get();
    }
}
