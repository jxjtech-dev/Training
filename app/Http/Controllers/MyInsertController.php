<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class MyInsertController extends Controller {
   public function insertform() {
      return view('my_create');
   }
	
   public function insert(Request $request) {
      $name = $request->input('name');
	  $data= array('name'=>$name);
	  DB::table('tablea')->insert($data);
	  echo "Record inserted successfully.<br/>";
	  echo '<a href = "/insert">Click Here</a> to go back.';
   }
}