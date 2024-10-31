<?php

namespace App\Controllers;

class Tentang extends BaseController
{
    public function index()
    {
        $data = [
            'judul' => 'Tentang',
            'page' => 'v_tentang',
        ];
        return view('v_front_end', $data);
    }
}
