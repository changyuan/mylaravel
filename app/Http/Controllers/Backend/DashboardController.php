<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Auth;
use App\Recommend;

class DashboardController extends Controller
{

	public function index()
	{
		
		return view('backend.home');
	}

	public function recommend()
	{

		$recommends  = Recommend::paginate(5);

		return view("backend.recommend")->with("recommends",$recommends);
	}


	public function postRecommend(Request $request,$id=0)
	{

		$input = $request->all();
    	// dd($input,$id);
		
		if ($request->has('name')) 
		{
			dd($input,$id);

		} else {

			return view("backend.recommend_add")->with("id",$id);
		}
		
	}
}
