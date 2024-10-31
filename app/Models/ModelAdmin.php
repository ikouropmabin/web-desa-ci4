<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelAdmin extends Model
{
  
    protected $tablePendidikan = 'tbl_pendidikan';
    
    
    protected $tablePekerjaan = 'tbl_pekerjaan';
    
   
    protected $tablePenghasilan = 'tbl_penghasilan';
    

    protected $tableBerita = 'tbl_berita';

    protected $tableWilayah = 'tbl_wilayah';

 
    public function getPendidikanCount()
    {
        return $this->db->table($this->tablePendidikan)->countAllResults(); 
    }

  
    public function getPekerjaanCount()
    {
        return $this->db->table($this->tablePekerjaan)->countAllResults(); 
    }

 
    public function getPenghasilanCount()
    {
        return $this->db->table($this->tablePenghasilan)->countAllResults(); 
    }


    public function getBeritaCount()
    {
        return $this->db->table($this->tableBerita)->countAllResults(); 
    }

    public function getWilayahCount()
    {
        return $this->db->table($this->tableWilayah)->countAllResults(); 
    }
}
