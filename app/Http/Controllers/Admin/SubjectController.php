<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class SubjectController extends Controller
{
    public function index()
    {
        return view('suri.admin.subject.index');
    }
}
