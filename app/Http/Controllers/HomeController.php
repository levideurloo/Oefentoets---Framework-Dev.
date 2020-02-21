<?php

namespace App\Http\Controllers;

use App\Teacher;
use App\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        // Take the newest posts
        $latestPosts = Post::orderBy('published_at', 'desc')->take(3)->get();

        $absentTeachers = $this->getAbsentTeachers();

        return view('welcome', compact('absentTeachers', 'latestPosts'));
    }

    private function getAbsentTeachers()
    {
        $teachers = Teacher::all();

        $result = [];

        foreach($teachers as $teacher)
        {
            $doesGiveClasses = $teacher->givesSubject();

            if ($teacher->is_absent || $doesGiveClasses)
            {
                $result[] = $teacher;
            }
        }

        return $result;
    }

}
