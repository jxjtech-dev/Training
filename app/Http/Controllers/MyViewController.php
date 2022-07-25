<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;

class MyViewController extends Controller {
public function index()
    {
        $users = DB::table('tablea')->select('id','name')->get();
		echo $users;
        return view('my_view')->with('users', $users);
    }
}