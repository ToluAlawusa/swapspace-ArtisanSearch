<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Statement extends Model 
{
  # eloquent needs u to define ur preferred table name and primary key for overide
  protected $table = 'statements';
  protected $primaryKey = 'statement_id';

  public static function getStatements() {
        $statement = Statement::all();
        return $statement;
  }

  public static function getStatementCatById($id) {
    // $reviewid = Reviews::all();
  		$statid = Statement::where("category_id", $id)->get();
      if($statid != null) {
        return $statid;
      } else {
        return false;
      }
  		
  }

  public static function getStatementById($id) {
      $staty = Statement::where("statement_id", '=', $id)->first();
      return $staty;
    }

}
