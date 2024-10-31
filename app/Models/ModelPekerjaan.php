<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelPekerjaan extends Model
{
    /**
     * Summary of AllData
     * @return array
     */

     protected $ModelPekerjaan; 
    public function AllData()
    {
        return $this->db->table('tbl_pekerjaan')
            ->get()->getResultArray();
    }

    public function InsertData($data)
    {
        $this->db->table('tbl_pekerjaan')->insert($data); 
    }

    public function UpdateData($data)
    {
        $this->db->table('tbl_pekerjaan')
        ->where('id_pekerjaan', $data['id_pekerjaan'])
        ->update($data); 
    }

    public function DeleteData($data)
    {
        $this->db->table('tbl_pekerjaan')
        ->where('id_pekerjaan', $data['id_pekerjaan'])
        ->delete($data); 
    }

}
 