<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Closure;
use DB;
use Hash;
use Illuminate\Support\Facades\Redis;
use Symfony\Component\HttpFoundation\Response;


trait test {
    function test1() {
        echo 234;
    }
}

class UserController extends Controller
{


    public function db()
    {

        $info = DB::select('select * from wuping where aid = ?', [1]);

        $res_ins = DB::insert('insert into users (name,email,password,remember_token) values (?,?,?,?)', ['Dayle', 'dayle@yaolan.com', '12312', "token2132"]);

        $info = DB::select('select * from users where id = ?', [1]);
        $info1 = DB::select('select * from users where id = :id', ["id" => 1]);

        $affected = DB::update('update users set password = 100 where name = ?', ['Dayle']);

        $deleted = DB::delete('delete from users');

        $list = DB::select("select * from users");


        $res = DB::statement('drop table users');


        DB::transaction(function () {
            DB::table('users')->update(['votes' => 1]);
            DB::table('posts')->delete();
        });
        DB::beginTransaction();
        DB::commit();
        DB::rollBack();

        $users = DB::connection('foo')->select("select * from users");


        var_dump($info, $info1, $list, $affected, $deleted, $res);
        exit;

    }

    //
    public function showProfile()
    {

        $this->a();

        //echo app_path();
        // $info = DB::select('select * from users where id = ?', [1]);

        $plural = str_plural('love');
        $url = action('UserController@json');
        $url1 = action('UserController@showProfile', ['id' => 1]);
        $urljpg = asset('img/photo.jpg');

        //$user = auth()->user();

        //bcrypt('plain-text');
        if (Hash::check('plain-text', "123")) {
            echo 1;
        } else {
            echo 2;
        }

        var_dump($plural, $url, $url1, $urljpg);
        //return __FUNCTION__;
        //return view("demo");
    }


    public function test($request, Closure $next)
    {
        $response = $next($request);

        if ($response instanceof Response) {
            $response->isNotModified($request);
        }

        return $response;
    }

    public function  json()
    {

        return response()->jsonp("func", ['name' => 'Abigail', 'state' => 'CA']);
    }

    public function  jsonp(Request $request)
    {

        return response()->jsonp("func", ['name' => 'Abigail', 'state' => 'CA'])->setCallback($request->input('callback'));
    }


    public function redis()
    {

//        Redis::pipeline(function ($pipe) {
//            for ($i = 0; $i < 1000; $i++) {
//                $pipe->set("key:$i", $i);
//            }
//        });

//        Redis::set('names', 'Taylor');
//        echo $name = Redis::get('names');


        $redis = Redis::connection('other127');

        $redis->lpush("list", time());
        $redis->rpush("list", rand(1, 1000000));

        $list = $redis->lrange("list", 0, -1);

        //Redis::lpush("list",time());
        //$list = Redis::lrange("list",0,-1);

        var_dump($list);


        view();
    }

    use test;
    public function traits()
    {

        //Psr4AutoloaderClass();
        //$this->test1();
        return view("demo")->with("some","");
    }
}
