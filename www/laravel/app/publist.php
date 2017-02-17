<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publist extends Model 
{
  # eloquent needs u to define ur preferred table name and primary key for overide
  protected $table = 'publists';
  protected $primaryKey = 'published_id';

  public static function getPublishedList() {
        $pub = Publist::all();
        return $pub;
  }

  public static function getPublistById($id) {
  		$publid = Publist::where("published_id", '=', $id)->first();
  		return $publid;
  }

}