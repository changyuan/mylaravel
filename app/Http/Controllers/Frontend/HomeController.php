<?php

/*
 * Taken from
 * https://github.com/laravel/framework/blob/5.2/src/Illuminate/Auth/Console/stubs/make/controllers/HomeController.stub
 */

namespace App\Http\Controllers\Frontend;


use App\Http\Requests;
use App\Recommend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

/**
 * Class HomeController
 * @package App\Http\Controllers\Frontend
 */
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');

    }

    /**
     * Show the application dashboard.<ul class="my-list">
         <li><a href="" class="item1"></a></li>
         <li><a href="" class="item2"></a></li>
         <li><a href="" class="item3"></a></li>
     </ul>
     *
     * @return Response
     */
    public function index()
    {
        // echo "<pre>";
        // print_r(app());
        // exit;
        // app()->setLocale("zh-CN");
        return view('welcome');
    }


    public function setLang()
    {
        
        //app()->setLocale("en");
        $lng = Request::input('lang', 'zh-CN');
        if(!empty($lng)) {
           session($sid, 'zh-CN');
        }
        $lang = session($sid, 'zh-CN');
        app()->setLocale($lang);
        $this->dispatch($changeLocale);
        return redirect()->back();
    }


    public function recommend()
    {
        // $data = Recommend::all()->keyBy("id");
        // $data = Recommend::all()->chunk(5);

        // $data = Recommend::where("type",">",0)->get();
        // Recommend->forget(1);
        
        // $chunk = Recommend::take(3);
        // $data = $chunk->get();

        // $data = Recommend::take(5)->get();
        // $data = Recommend::firstOrFail();
        
        //构建自己的查询作用域
        $data  = Recommend::status()->take(5)->get()->keyBy("id")->chunk(2);

        return response()->json($data,404);
    }
}