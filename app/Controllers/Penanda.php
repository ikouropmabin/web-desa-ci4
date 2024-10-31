<?php

namespace App\Controllers;

class Penanda extends BaseController
{
    public function index()
    {
        $data = [
            'judul' => 'Penanda',
            'page' => 'v_view_penanda',
        ];
        return view('v_back_end', $data);
    }
}
