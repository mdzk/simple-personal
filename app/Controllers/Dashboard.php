<?php

namespace App\Controllers;
use App\Models\UserModel;

class Dashboard extends BaseController
{
    public function index()
    {
        $user       = new UserModel();
        $data = [
            'user'  => $user->find(session()->get('id_user')),
        ];
        return view('dashboard/home', $data);
    }

}