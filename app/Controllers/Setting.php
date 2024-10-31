<?php

namespace App\Controllers;

class Setting extends BaseController
{
   
    public function index()
    {

        $data = [
            'judul' => 'Pengaturan',
            'page' => 'v_pengaturan',
        ];
        return view('v_back_end', $data);
    }    
}