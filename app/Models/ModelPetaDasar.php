<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelPetaDasar extends Model
{
    public function DataKampung()
    {
        return $this->db->table('tbl_petadasar')
            ->where('id', 1)
            ->get()->getRowArray();
    }

    public function UpdateData($data)
    {
        $this->db->table('tbl_petadasar')
            ->where('id', 1)
            ->update($data);
    }
}