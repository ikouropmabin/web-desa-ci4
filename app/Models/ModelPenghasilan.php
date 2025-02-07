<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelPenghasilan extends Model
{
    /**
     * Summary of AllData
     * @return array
     */
    protected $ModelPenghasilan; 
    public function AllData()
    {
        return $this->db->table('tbl_penghasilan')
            ->get()->getResultArray();
    }

    public function InsertData($data)
    {
        $this->db->table('tbl_penghasilan')->insert($data); 
    }    
    public function UpdateData($data)
    {
        $this->db->table('tbl_penghasilan')
        ->where('id_penghasilan', $data['id_penghasilan'])
        ->update($data); 
    }

    public function DeleteData($data)
    {
        $this->db->table('tbl_penghasilan')
        ->where('id_penghasilan', $data['id_penghasilan'])
        ->delete($data); 
    }

}
 