<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelAuth;
class Auth extends BaseController
{
    /**
     * Summary of __construct
     */
    protected $ModelAuth;
     public function __construct()
    {
        $this->ModelAuth = new ModelAuth();
    }
    public function index()
    {
        $data = [
            'judul' => 'Login',
        ];
            return view('v_login', $data);
    }

    public function login()
    {
        if ($this->validate([
            'username' => [
                'label' => 'Username',
                'rules' => 'required',
                'errors'  => [
                    'required' => '{field} Tidak Boleh Kosong !!!!'
                ]
            ],
            'level' => [
                'label' => 'Level',
                'rules' => 'required',
                'errors'  => [
                    'required' => '{field} Tidak Boleh Kosong !!!!'
                ]
            ],
            'password' => [
                'label' => 'Password',
                'rules' => 'required',
                'errors'  => [
                    'required' => '{field} Tidak Boleh Kosong !!!!'
                ]
            ],
        ])) {
            $username = $this->request->getPost('username');
            $level = $this->request->getPost('level');
            $password = sha1($this->request->getPost('password'));
            if ($level == 1) {
                $cek = $this->ModelAuth->LoginUser($username,$password, $level);
                if ($cek) {
                    session()->set('level',$level);
                    session()->set('nama_user',$cek['nama_user']);
                    session()->set('foto',$cek['foto']);
                    return redirect()->to('Admin');
                }else {
                    session()->setFlashdata('pesan','Login gagal, Username Atau  Password Salah !!' );
                    return redirect()->to('Auth/index');
                }    
            } elseif ($level == 2) {
                $cek = $this->ModelAuth->LoginUser($username,$password, $level);
                if ($cek) {
                    session()->set('level',$level);
                    session()->set('nama_user',$cek['nama_user']);
                    session()->set('foto',$cek['foto']);
                    return redirect()->to('Admin');
                }else {
                    session()->setFlashdata('pesan','Login gagal, Username Atau  Password Salah !!' );
                    return redirect()->to('Auth/index');
                }  
            } elseif ($level == 3) {
                # code...
            }
        } else {
            return redirect()->to('Auth/index')->withInput();
        }
    }

    public function LogOut()
    {
        session()->remove('level');
        session()->remove('nama_user');
        session()->remove('password');
        return redirect()->to('Auth/index');
    }
}
