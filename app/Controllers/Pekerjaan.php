<?php

namespace App\Controllers;

use App\Models\ModelPekerjaan;

class Pekerjaan extends BaseController
{
    public function __construct()
    {
        $this->ModelPekerjaan= new ModelPekerjaan();
    }
    protected $ModelPekerjaan;
    public function index()
    {
        $data = [
            'judul' => 'Pekerjaan',
            'page' => 'v_pekerjaan',
            'pekerjaan' => $this->ModelPekerjaan->AllData(),

        ];
        return view('v_back_end', $data);
    }

    public function InsertData()
    {
        $data = [
            'pekerjaan'=> $this->request->getPost('pekerjaan'),
        ];
        session()->setFlashdata('insert', 'Data Berhasil Ditambahkan !!'); 
        $this->ModelPekerjaan->InsertData($data);
        return redirect()->to('pekerjaan');
    }

    public function UpdateData($id_pekerjaan)
    {
        $data = [
            'id_pekerjaan' => $id_pekerjaan,
            'pekerjaan'    => $this->request->getPost('pekerjaan'),
        ];
        session()->setFlashdata('update', 'Data Berhasil Diupdate !!'); 
        $this->ModelPekerjaan->UpdateData($data);
        return redirect()->to('pekerjaan');
    }

    public function DeleteData($id_pekerjaan)
    {
        $data = [
            'id_pekerjaan' => $id_pekerjaan,
        ];
        session()->setFlashdata('delete', 'Data Berhasil Didelete !!'); 
        $this->ModelPekerjaan->DeleteData($data);
        return redirect()->to('pekerjaan');
    }
}
