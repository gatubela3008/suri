<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class GroupController extends Controller
{
    public function index()
    {
        return view('suri.admin.group.index');
    }
}
