<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

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
