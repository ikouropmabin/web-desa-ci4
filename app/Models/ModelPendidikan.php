<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelPendidikan extends Model
{
    /**
     * Summary of AllData
     * @return array
     */

    protected $ModelPendidikan;

    public function AllData()

    {
        return $this->db->table('tbl_pendidikan')
            ->get()->getResultArray();
    }

    public function InsertData($data)
    {
        $this->db->table('tbl_pendidikan')->insert($data); 
    }

    public function UpdateData($data)
    {
        $this->db->table('tbl_pendidikan')
        ->where('id_pendidikan', $data['id_pendidikan'])
        ->update($data); 
    }

    public function DeleteData($data)
    {
        $this->db->table('tbl_pendidikan')
        ->where('id_pendidikan', $data['id_pendidikan'])
        ->delete($data); 
    }

}
 