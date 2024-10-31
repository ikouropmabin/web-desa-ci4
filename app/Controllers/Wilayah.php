<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelWilayah;
use App\Models\ModelPetaDasar;

class Wilayah extends BaseController
{
    protected $ModelWilayah; 
    protected $ModelPetaDasar; 

    public function __construct()
    {
        $this->ModelWilayah = new ModelWilayah();
        $this->ModelPetaDasar = new ModelPetaDasar();
    }

    public function index()
    {
        $data = [
            'judul' => 'Wilayah',
            'page' => 'wilayah/v_index',
            'wilayah' => $this->ModelWilayah->AllData(),
            'kampung' => $this->ModelPetaDasar->DataKampung(),
        ];
        return view('v_back_end', $data);
    }
}
