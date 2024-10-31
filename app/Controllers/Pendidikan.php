<?php

namespace App\Controllers;

use App\Models\ModelPendidikan;

class Pendidikan extends BaseController
{
    public function __construct()
    {
        $this->ModelPendidikan= new ModelPendidikan();
    }
    protected $ModelPendidikan;
    public function index()
    {
        $data = [
            'judul' => 'Pendidikan',
            'page' => 'v_pendidikan',
            'pendidikan' => $this->ModelPendidikan->AllData(),
        ];
        return view('v_back_end', $data);
    }

    public function InsertData()
    {
        $data = [
            'pendidikan'=> $this->request->getPost('pendidikan'),
        ];
        session()->setFlashdata('insert', 'Data Berhasil Ditambahkan !!'); 
        $this->ModelPendidikan->InsertData($data);
        return redirect()->to('pendidikan');
    }

    public function UpdateData($id_pendidikan)
    {
        $data = [
            'id_pendidikan' => $id_pendidikan,
            'pendidikan'    => $this->request->getPost('pendidikan'),
        ];
        session()->setFlashdata('update', 'Data Berhasil Diupdate !!'); 
        $this->ModelPendidikan->UpdateData($data);
        return redirect()->to('pendidikan');
    }

    public function DeleteData($id_pendidikan)
    {
        $data = [
            'id_pendidikan' => $id_pendidikan,
        ];
        session()->setFlashdata('delete', 'Data Berhasil Didelete !!'); 
        $this->ModelPendidikan->DeleteData($data);
        return redirect()->to('pendidikan');
    }
}
