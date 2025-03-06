<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $usuario = Auth::user();
        $roles = $usuario->getRoleNames();
        $role = $roles->first();

        switch ($role) {
            case 'admin':
                return view('suri.admin.dashboard');
                break;

            case 'invoice':
                return view('suri.invoice.dashboard');
                break;

            case 'professor':
                return view('suri.professor.dashboard');
                break;

            case 'student':
                return view('suri.student.dashboard');
                break;


            default:
                # code...
                break;
        }
       
    }
}
