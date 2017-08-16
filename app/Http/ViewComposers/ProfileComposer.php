<?php

namespace App\Http\ViewComposers;

use Illuminate\Contracts\View\View;
//use Illuminate\Users\Repository as UserRepository;

class ProfileComposer
{
    /**
     * �û��ֿ�ʵ��.
     *
     * @var UserRepository
     */
    protected $users;

    /**
     * ����һ���µ�����composer.
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
     * �����ݵ���ͼ.
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