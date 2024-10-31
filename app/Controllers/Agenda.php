<?php

namespace App\Controllers;

class Agenda extends BaseController
{
    public function index()
    {
        $data = [
            'judul' => 'Agenda',
            'page' => 'v_agenda',
        ];
        return view('v_front_end', $data);
    }
}
