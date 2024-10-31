<?php

namespace App\Controllers;

use App\Models\ModelPenghasilan;

class Penghasilan extends BaseController
{
    public function __construct()
    {
        $this->ModelPenghasilan= new ModelPenghasilan();
    }
    protected $ModelPenghasilan;
    public function index()
    {
        $data = [
            'judul' => 'Penghasilan',
            'page' => 'v_penghasilan',
            'penghasilan' => $this->ModelPenghasilan->AllData(),

        ];
        return view('v_back_end', $data);
    }

    public function InsertData()
    {
        $data = [
            'penghasilan'=> $this->request->getPost('penghasilan'),
        ];
        session()->setFlashdata('insert', 'Data Berhasil Ditambahkan !!'); 
        $this->ModelPenghasilan->InsertData($data);
        return redirect()->to('penghasilan');
    }

    public function UpdateData($id_penghasilan)
    {
        $data = [
            'id_penghasilan' => $id_penghasilan,
            'penghasilan'    => $this->request->getPost('penghasilan'),
        ];
        session()->setFlashdata('update', 'Data Berhasil Diupdate !!'); 
        $this->ModelPenghasilan->UpdateData($data);
        return redirect()->to('penghasilan');
    }

    public function DeleteData($id_penghasilan)
    {
        $data = [
            'id_penghasilan' => $id_penghasilan,
        ];
        session()->setFlashdata('delete', 'Data Berhasil Didelete !!'); 
        $this->ModelPenghasilan->DeleteData($data);
        return redirect()->to('penghasilan');
    }
}
