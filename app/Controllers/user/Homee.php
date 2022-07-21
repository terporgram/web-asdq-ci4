<?php

namespace App\Controllers\user;

use App\Controllers\BaseController;

class Homee extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Dasboad Admin'
        ];
        return view('client/home/indexviewC', $data);
    }
}
