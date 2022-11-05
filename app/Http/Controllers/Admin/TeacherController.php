<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index(){
        $tit_teacher = 'Docentes';

        return view('admin.teachers.index', [
            'tit_teacher' => $tit_teacher
        ]);
    }
}
