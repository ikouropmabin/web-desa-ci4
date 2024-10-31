<?php

namespace App\Controllers;

use App\Models\ModelAdmin; // Memuat model

class Admin extends BaseController
{
    protected $dataModel;

    public function __construct()
    {
        $this->dataModel = new ModelAdmin(); 
    }

    public function index()
    {
        $data = [
            'judul' => 'Dashboard',
            'page' => 'v_admin',
            'jumlahPendidikan' => $this->dataModel->getPendidikanCount(),
            'jumlahPekerjaan' => $this->dataModel->getPekerjaanCount(),
            'jumlahPenghasilan' => $this->dataModel->getPenghasilanCount(),
            'jumlahBerita' => $this->dataModel->getBeritaCount(),
            'jumlahWilayah' => $this->dataModel->getWilayahCount(),
        ];
        
        return view('v_back_end', $data);
    }
}

