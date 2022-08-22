<?php

namespace App\Controllers;

use App\Models\UsersModel;

class Users extends BaseController
{
    protected $model;

    public function __construct()
    {
        $this->model = new UsersModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Data User'
        ];
        return view('users/view_users', $data);
    }
}
