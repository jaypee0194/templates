<?php

namespace App\Controllers;

use App\Models\UserModel;

class Displayuser extends BaseController
{
    public function index(){
        $userModel = new UserModel();
        $data['users'] = $userModel->orderBy('id', 'DESC')->findAll();
        return view('/Dashboard/dashboard', $data);
    }
}