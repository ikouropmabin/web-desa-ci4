<?php

namespace App\Controllers;

class Galeri extends BaseController
{
    public function index()
    {
        $data = [
            'judul' => 'Galeri',
            'page' => 'v_galeri',
        ];
        return view('v_front_end', $data);
    }
}
