<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Statement;
use App\Category;
use App\User;
use App\Publist;

use Illuminate\Http\Request;

class PreviewStatement extends Controller 
{

	 public function showPreviewStatement($id) {
          return view('previewstatement', ['staty'=>Statement::getStatementById($id), 'id'=>$id]);
    }

    public function doPublishStatement(Request $request, $id) {

    	$data = Statement::getStatementById($id);


            $published = new Publist();
   
            $published->user_id = $data['user_id'];
            $published->category_id = $data['category_id'];
            $published->statement_id = $id;
            $published->statement = $request['statement'];

            $published->save();

            return redirect()->route('admindashboard');
    }
}