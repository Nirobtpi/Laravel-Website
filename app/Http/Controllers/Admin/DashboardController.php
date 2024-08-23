<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
    //   return  $all=User::with('role')->get();
        return view('admin.dashboard');
    }
}
