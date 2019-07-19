<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Course;

class CoursesController
{
    //
    public function getCourses(){
        $data = Course::get();
        return $data;
    }
}
