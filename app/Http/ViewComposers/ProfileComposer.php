<?php

namespace App\Http\ViewComposers;

use Illuminate\Contracts\View\View;
//use Illuminate\Users\Repository as UserRepository;

class ProfileComposer
{
    /**
     * 用户仓库实现.
     *
     * @var UserRepository
     */
    protected $users;

    /**
     * 创建一个新的属性composer.
     *
     * @param UserRepository $users
     * @return void
     */
    public function __construct()
    {
        // Dependencies automatically resolved by service container...
        //$this->users = $users;
    }

    /**
     * 绑定数据到视图.
     *
     * @param View $view
     * @return void
     */
    public function compose(View $view)
    {
//        echo "first composer";
        $view->with('name', "James");
        //$view->with('address', "Shanghai");
    }
}