<?php

namespace App\Controllers;
use App\Models\SiswaModel;

class Home extends BaseController
{
    public function __construct()
    {
        $this->swModel = new SiswaModel();
        helper('form', 'url');
    }

    public function index()
    {
        $data['validation'] = \Config\Services::validation();
        return view('login', $data);
    }

    public function save_account()
    {
        $nama         = $this->request->getPost('nama');
        $email        = $this->request->getPost('email');
        $password     = $this->request->getPost('password');
        $password     = password_hash($password, PASSWORD_DEFAULT);

        $data = [
            'nama'         => $nama,
            'email'        => $email,
            'password'     => $password,
        ];

        if (!$this->validate([
            'email' => [
                'rules' => 'valid_email',
                'errors' => [
                    'valid_email' => '<h6>Format Email Harus Valid</h6>'
                ]
            ],
            'password' => [
                'rules' => 'min_length[8]',
                'errors' => [
                    'min_length' => '<h6>Password minimal 8 huruf</h6>'
                ]
            ]
        ])) {
            session()->setFlashdata('danger', 'Gagal Melakukan Pendaftaran');
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }

        $simpan = $this->swModel->insert_data($data);
        if ($simpan) {
            session()->setFlashdata('success', 'Berhasil Melakuka Pendaftaran');
            return redirect()->to(base_url('home'));
        }
    }

    public function loginAuth()
    {
        $this->swModel = new SiswaModel();
        $session = session();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        
        $data = $this->swModel->where('email', $email)->first();
        
        if($data){
            $pass = $data['password'];
            $verify_pass = password_verify($password, $pass);
            if($verify_pass){
                $ses_data = [
                    'id_siswa' => $data['id_siswa'],
                    'nama' => $data['nama'],
                    'email' => $data['email'],
                    'isLoggedIn' => TRUE
                ];
                
                $session->set($ses_data);
                return redirect()->to('siswa/index');
                
            }else{
                $session->setFlashdata('msg', 'Password yang dimasukkan salah');
                return redirect()->to('home');
            }
            
        }else{
            $session->setFlashdata('msg', 'Email tidak terdaftar');
            return redirect()->to('home');
        }
    }
    
    function logout(){
        session()->destroy();
        return redirect()->to('home/index');
	}
}
