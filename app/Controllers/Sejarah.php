<?php

namespace App\Controllers;

class Sejarah extends BaseController
{
    public function index()
    {
        $data = [
            'judul' => 'Sejarah',
            'page' => 'v_sejarah',
        ];
        return view('v_front_end', $data);
    }
}
