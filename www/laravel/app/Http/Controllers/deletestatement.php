<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Category;
use App\Statement;

use Illuminate\Http\Request;

class DeleteStatement extends Controller 
{

	 public function doDeleteStatement($id) {

         $statd = Statement::getStatementById($id);

         $statd->delete();

		 return redirect()->route('admindashboard');
    }

}