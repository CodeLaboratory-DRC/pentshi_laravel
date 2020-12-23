<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use App\Models\Exams;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function detail($type, $id)
    {
        if ($type == 'course') {
            $results = Courses::select()->where('id', $id)->where('state', 'valid')->first();
            return view('detail', compact('results'));
        } elseif ($type == 'exams') {
            $results = Exams::select()->where('id', $id)->where('state', 'valid')->first();
            return view('detail', compact('results'));
        }
    }
}
