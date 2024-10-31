<?php

namespace App\Controllers;

use App\Models\ModelPetaDasar;

class PetaDasar extends BaseController
{
    protected $ModelPetaDasar; 

    public function __construct()
    {
        $this->ModelPetaDasar = new ModelPetaDasar();
    }


    public function index()
    {

        return $this->PetaDasar();
    }

    public function PetaDasar()
    {

        $data = [
            'judul' => 'Peta Dasar',
            'page' => 'v_view_peta_dasar',
            'kampung' => $this->ModelPetaDasar->DataKampung(),
        ];

        return view('v_back_end', $data);
    }

    public function UpdatePetaDasar()
    {
    $data = [
        'id' => 1,
        'nama_kampung' => $this->request->getPost('nama_kampung'),
        'coordinat_wilayah' => $this->request->getPost('coordinat_wilayah'),
        'zoom_view' => $this->request->getPost('zoom_view'),
            ];
            
        $this->ModelPetaDasar->UpdateData($data); 
         session()->setFlashdata('pesan','Peta Telah Diupdate !!!');
         return redirect()->to('PetaDasar/PetaDasar');
            }

}
