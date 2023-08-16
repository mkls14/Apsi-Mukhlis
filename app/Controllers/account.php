<?php

namespace App\Controllers;
use App\Controllers\BaseController;

use \Myth\Auth\Models\UserModel;

class account extends BaseController
{
    private $model;
    public function __construct()
    {
        helper('form');
        $this-> model = new UserModel();
    }

    public function index()
    {
        $data['title'] = 'Profile';
        $users = new UserModel();
        $data['users'] = $users->findAll();
        return view('account/index', $data);
    }

    


}
