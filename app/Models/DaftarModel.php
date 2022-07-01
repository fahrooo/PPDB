<?php 

namespace App\Models;  
use CodeIgniter\Model;

  
class DaftarModel extends Model{

    protected $table      = 'tb_datasiswa';
    protected $primaryKey = 'id_pendaftaran';

    public function getData()
    {
        return $this->findAll();
    }
}

    // public function no_daftar($id_pendaftaran){
    //     $this->db->table($this->table2)->select_max('id');
    //     $this->db->table($this->table2)->where('id_pendaftaran', $id_pendaftaran);
    // }
