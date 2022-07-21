<?php

namespace App\Controllers;

class Kategori extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Kategori'
        ];
        return view('admin/kategori/index', $data);
    }
    public function tambah()
    {
        $data = [
            'title' => 'Kategori'
        ];
        return view('admin/kategori/tambah', $data);
    }
}
