<?php

namespace App\Controllers;

class Peta extends BaseController
{
    public function index()
    {
        $data = [
            'judul' => 'Peta',
            'page' => 'v_view_peta',
        ];
        return view('v_back_end', $data);
    }
}
