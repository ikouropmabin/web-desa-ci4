
<?php

namespace App\Controllers;

use App\Models\ModelBerita;

class Berita extends BaseController
{
    public function __construct()
    {
        $this->ModelBerita = new ModelBerita();
    }
    protected $ModelBerita;
    public function index()
    {
        $data = [
            'judul' => 'Berita',
            'page' => 'berita/v_index',
            'berita' => $this->ModelBerita->AllData(),
        ];
        return view('v_back_end', $data);
    }

    public function Input()
    {
        $data = [
            'judul' => 'Input Berita',
            'page' => 'berita/v_input',
            'berita' => $this->ModelBerita->AllData(),
        ];
        return view('v_back_end', $data);
    }
}
