<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InscriptionController extends Controller
{
    public function index()
    {
        return view('suri.admin.inscription.index');
    }
}
