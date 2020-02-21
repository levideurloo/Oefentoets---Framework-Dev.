<?php

namespace App\Http\Controllers;

use App\Teacher;
use Illuminate\View\View;

class TeacherController extends Controller
{
    /**
     * Display a list of all Teachers
     *
     * @return View
     */
    public function index()
    {
        $teachers = Teacher::all();
        return view('teachers.index', [
            'teachers' => $teachers
        ]);
    }

}
