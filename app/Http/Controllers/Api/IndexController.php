<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    //
    public function index()
    {
      $arr = ["code"=>1,"msg"=>"success"];
      return response()->json($arr);
    }


    public function ip(Request $request)
    {
        $ip = $request->input('ip', $request->ip());
        $urlTaobao = 'http://ip.taobao.com/service/getIpInfo.php?ip='.$ip;
        $json = @file_get_contents($urlTaobao);
        $arr = json_decode($json,true);
        return response()->json($arr);
        // return response()->json($arr)->setCallback($request->input('callback'));
    }

    public function foo(Request $request)
    {
      $data = $request->all();
      $path = $request->path();
      $url = $request->url();
      $fullurl = $request->fullUrl();
      $fullurl_query = $request->fullUrlWithQuery(['bar' => 'baz']);
      $method = $request->method();
      $cookie = $request->cookie();

      return response()->json(compact("data","path","url","fullurl","fullurl_query","method","cookie"),200);

    }
}
