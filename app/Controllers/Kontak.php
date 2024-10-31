<?php

namespace App\Controllers;

class kontak extends BaseController
{
    public function index()
    {
        $data = [
            'judul' => 'Kontak',
            'page' => 'v_kontak',
        ];
        return view('v_front_end', $data);
    }
}
