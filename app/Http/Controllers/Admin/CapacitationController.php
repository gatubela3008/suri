<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Capacitation;
use Illuminate\Http\Request;

class CapacitationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('suri.admin.capacitation.index');
    }

    
}
