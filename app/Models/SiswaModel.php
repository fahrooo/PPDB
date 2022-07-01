<?php 

namespace App\Models;  
use CodeIgniter\Model;

  
class SiswaModel extends Model{

   // protected $db;
    protected $table      = 'tb_siswa';
    protected $table2      = 'tb_datasiswa';
    protected $primaryKey = 'id_siswa';
    protected $primaryKey2 = 'id_pendaftaran';

    // public function __construct()
    // {
    //     $this->db = db_connect();
    // }
    public function insert_data($data)
    {
        return $this->db->table($this->table)->insert($data);
    }

    public function insert_formSiswa($data)
    {
        return $this->db->table($this->table2)->insert($data);
    }

    public function daftarSama($data, $no_pendaftaran){
        return $this->db->table($this->table2)->where($data, ['no_pendaftaran' => $no_pendaftaran]);
    }

    public function getData()
    {
        return $this->findAll();
    }

    public function next_id()
    {
        $this->db = db_connect();
        $builder = $this->db->table('tb_datasiswa');
        $builder->selectMax('id_pendaftaran');
        $query = $builder->get()->getRowArray();
        return $query;
    }
}   
