<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('suri.admin.student.index');
    }

}
