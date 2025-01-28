<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ScheduleCapacitationController extends Controller
{
    public function index()
    {
        return view('suri.admin.schedule-capacitation.index');
    }
}
