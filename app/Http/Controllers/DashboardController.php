<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        if (Auth::user()->hasRole('master')) {
            return view('dashboards/masterdashboard');
        } elseif (Auth::user()->hasRole('principal')) {
            return view('dashboards/principaldashboard');
        } elseif (Auth::user()->hasRole('student')) {
            return view('dashboards/studentdashboard');
        } elseif (Auth::user()->hasRole('teacher')) {
            return view('dashboards/teacherdashboard');
        } elseif (Auth::user()->hasRole('parent')) {
            return view('dashboards/parentdashboard');
        } elseif (Auth::user()->hasRole('librarian')) {
            return view('dashboards/librariandashboard');
        } elseif (Auth::user()->hasRole('accountant')) {
            return view('dashboards/accountantdashboard');
        }
    }
}
