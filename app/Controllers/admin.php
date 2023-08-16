<?php

namespace App\Controllers;
use App\Controllers\BaseController;

use \Myth\Auth\Models\UserModel;
use App\Models\SuhuModel;

class admin extends BaseController
{
    private $model;
    public function __construct()
    {
        helper('form');
        $this-> model = new UserModel();
    }

    public function index()
    {      
        $data['title'] = 'Dashboard';
        $users = new \Myth\Auth\Models\UserModel();
        $data['users'] = $users->findAll();
        return view('admin/index', $data);
    }

    public function userlist()
    {
        $data['title'] = 'User List';


        //$users = new \Myth\Auth\Models\UserModel();
        //$data['users'] = $users->findAll();

        $db     = \Config\Database::connect();
        $builder= $db->table('users');
        $builder->select('users.id as userid, username, email, fullname, active, name');
        $builder->join('auth_groups_users','auth_groups_users.user_id = users.id');
        $builder->join('auth_groups','auth_groups.id = auth_groups_users.group_id');
        $query = $builder->get();

        $data['users'] = $query->getResult();

        return view('admin/userlist', $data);
    }
    public function get_data()
    {
        $model = new SuhuModel();
        $data = $model->satudata();
        echo json_encode($data);
    }


    




}
