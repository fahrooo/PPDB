<?php

namespace App\Controllers;
use App\Models\SiswaModel;
use App\Models\DaftarModel;

class siswa extends BaseController
{
    public function __construct()
    {
        $this->swModel = new SiswaModel();
        helper('form', 'url');
    }

    public function index()
    {
        return view('siswa/homeSiswa');
    }

    public function formDaftar()
    {
        $max = $this->swModel->next_id();
        $data = [
            'max'        => $max
        ];
        return view('siswa/daftarSiswa', $data);
    }

    public function tampilDaftar()
    {

        $this->swModel = new DaftarModel();
        $this->swModel2 = new SiswaModel();
        $data = $this->swModel->getData();
        $data2 = $this->swModel2->getData();
        return view('siswa/tampilSiswa', compact('data','data2'));
    }

    public function enkripsiDaftar()
    {
        $this->swModel = new DaftarModel();
        $data = $this->swModel->getData();
        return view('siswa/tampilSiswaEn', compact('data'));
    }

    public function tambahDaftar()
    {
        $this->swModel = new SiswaModel();

        $no_pendaftaran     = $this->request->getPost('no_pendaftaran');
        $no_sttb            = $this->request->getPost('no_sttb');
        $nama               = $this->request->getPost('nama');
        $jk                 = $this->request->getPost('jk');
        $agama              = $this->request->getPost('agama');
        $gol_darah          = $this->request->getPost('gol_darah');
        $alamat             = $this->request->getPost('alamat');
        $tempat_lahir       = $this->request->getPost('tempat_lahir');
        $tgl_lahir          = $this->request->getPost('tgl_lahir');
        $no_telp            = $this->request->getPost('no_telp');
        $email              = $this->request->getPost('email');
        $nm_ayah            = $this->request->getPost('nm_ayah');
        $kj_ayah            = $this->request->getPost('kj_ayah');
        $hsl_ayah           = $this->request->getPost('hsl_ayah');
        $nm_ibu             = $this->request->getPost('nm_ibu');
        $kj_ibu             = $this->request->getPost('kj_ibu');
        $hsl_ibu            = $this->request->getPost('hsl_ibu');
        $jlr_daftar         = $this->request->getPost('jlr_daftar');
        $uploud_foto        = $this->request->getPost('uploud_foto');

        $data = [
            'no_pendaftaran'     => $no_pendaftaran,
            'no_sttb'            => $no_sttb,
            'nama'               => $nama,
            'jk'                 => $jk,
            'agama'              => $agama,
            'gol_darah'          => $gol_darah,
            'alamat'             => $alamat,
            'tempat_lahir'       => $tempat_lahir,
            'tgl_lahir'          => $tgl_lahir,
            'no_telp'            => $no_telp,
            'email'              => $email,
            'nm_ayah'            => $nm_ayah,
            'kj_ayah'            => $kj_ayah,
            'hsl_ayah'           => $hsl_ayah,
            'nm_ibu'             => $nm_ibu,
            'kj_ibu'             => $kj_ibu,
            'hsl_ibu'            => $hsl_ibu,
            'jlr_daftar'         => $jlr_daftar,
            'uploud_foto'        => $uploud_foto
        ];

        $sama = $this->swModel->daftarSama($data, $no_pendaftaran);
        if(!$sama){
            session()->setFlashdata('danger', 'Pendaftaran hanya bisa dilakukan sekali');
            return redirect()->to(base_url('siswa/formDaftar'));
        }else {
            $this->swModel->insert_formSiswa($data);
            session()->setFlashdata('success', 'Berhasil Menambahkan Data');
            return redirect()->to(base_url('siswa/formDaftar'));
        }
    }
}
