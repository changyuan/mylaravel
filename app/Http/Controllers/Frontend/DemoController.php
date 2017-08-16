<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\Task;
use Storage;
class DemoController extends Controller
{
	public function index(Request $request) 
	{

		// dd($request->all());
		
			// $list = User::find(1)->tasks()->get();
		
		
		//$list = Task::whereIn("user_id",[1,2])->get();
		// $list1 = Task::where("user_id",8);
		$collect = Task::find(2)->user()->get();
		return view("demo")->with(["name"=>1,"some"=>3])->with("collects",$collect);
		// withErrors()
	}


	public function store()
	{

		
		$isexist = Storage::disk('local')->exists('file1.txt');
		if ($isexist) {
			$contents = Storage::get('file1.txt');
			$infos = Storage::lastModified('file1.txt');
			$files = Storage::allFiles(realpath('storage'));
			$directories = Storage::allDirectories(realpath('storage'));
			dd($directories);
		} else {

			Storage::disk('local')->put('file1.txt', rand(123,2343));	
			Storage::prepend('file1.txt', 'Appended Text before');
			Storage::append('file1.txt', 'Appended Text after');
		}
		
	}

}
