<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Statement;
use App\Category;
use App\User;

use Illuminate\Http\Request;

class AdminDashboard extends Controller 
{

    public function showDashboard() {
          return view('admindashboard', ['stat'=>Statement::getStatements()]);
    }

}