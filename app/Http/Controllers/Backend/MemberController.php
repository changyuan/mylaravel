<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class MemberController extends Controller
{
    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    protected $guard  = "backend";

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/backend/';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    
    protected $loginView = "backend.login";
    

    protected $redirectAfterLogout = "/backend/auth/login";


    public function __construct()
    {
        // $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
    }


   	public function profile()
   	{
   		

   		return view('backend.profile');
   	}

   	
}
