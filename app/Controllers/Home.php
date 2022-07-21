<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Dasboad Admin'
        ];
        return view('admin/home/indexview', $data);
    }

    // public function kategori()
    // {
    //     $data = [
    //         'title' => 'kategori'
    //     ];
    //     return view('admin/home/kategori', $data);
    // }
}
