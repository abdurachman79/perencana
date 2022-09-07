<?php

namespace App\Controllers;

use App\Entities\UsersEntity;
use App\Entities\UsersLevelEntity;
use App\Libraries\ModelLoader;

class Users extends BaseController
{
    protected $usersModel;
    protected $levelModel;
    protected $bidangModel;

    public function __construct()
    {
        $this->usersModel = ModelLoader::fetch('UsersModel');
        $this->levelModel = ModelLoader::fetch('UsersLevelModel');
        $this->bidangModel = ModelLoader::fetch('BidangModel');
    }

    public function index()
    {
        $data = [
            'title'  => 'Data User',
            'users'  => $this->usersModel->findAll(),
            'level'  => $this->levelModel->findAll(),
            'bidang' => $this->bidangModel->findAll()
        ];
        return view('users/view_users', $data);
    }

    public function level()
    {
        $data = [
            'title' => 'Level User',
            'level' => $this->levelModel->findAll()
        ];
        return view('users/view_level', $data);
    }

    public function simpanlevel()
    {
        if ($this->request->getMethod() == "post") {
            $post = $this->request->getPost();
            $levelEntity = new UsersLevelEntity($post);
            $this->levelModel->save($levelEntity);
            session()->setFlashdata('flashdata', 'Data berhasil disimpan');
        }
        return redirect()->to(base_url('users/level'));
    }

    public function updatelevel($id)
    {
        if ($this->request->getMethod() == "post") {
            $post = $this->request->getPost();
            $levelEntity = new UsersLevelEntity($post);
            $this->levelModel->update($id, $levelEntity);
            session()->setFlashdata('flashdata', 'Data berhasil diubah');
        }
        return redirect()->to(base_url('users/level'));
    }

    public function simpanuser()
    {
        if ($this->request->getMethod() == "post") {
            $post = $this->request->getPost();
            $usersEntity = new UsersEntity($post);
            $this->usersModel->save($usersEntity);
            session()->setFlashdata('flashdata', 'Data berhasil disimpan');
        }
        return redirect()->to(base_url('users'));
    }

    public function updateuser($id)
    {
        if ($this->request->getMethod() == "post") {
            $post = $this->request->getPost();
            $usersEntity = new UsersEntity($post);
            $this->usersModel->update($id, $usersEntity);
            session()->setFlashdata('flashdata', 'Data berhasil diubah');
        }
        return redirect()->to(base_url('users'));
    }

    // public function isUsernameAvailable()
    // {
    //     $username = $this->usersModel->where('username', $this->request->getVar('username'))->findColumn('username');
    //     if ($username) {
    //         echo json_encode(false);
    //     } else {
    //         echo json_encode(true);
    //     }
    // }

    public function isUsernameAvailable()
    {
        $valid = 0;
        $id = $this->request->getVar('id');
        $username = $this->request->getVar('username');

        if (!$id) {
            $valid = $this->usersModel->where('username', $username)->findColumn('username');
        } else {
            $data = $this->usersModel->find($id);
            if (strtolower(trim($username)) != strtolower(trim($data->username))) {
                $valid = $this->usersModel->where('username', $username)->findColumn('username');
            }
        }

        if ($valid) {
            echo json_encode(false);
        } else {
            echo json_encode(true);
        }
    }

    public function isInisialAvailable()
    {
        $valid = 0;
        $id = $this->request->getVar('id');
        $inisial = $this->request->getVar('inisial');

        if (!$id) {
            $valid = $this->usersModel->where('inisial', $inisial)->findColumn('inisial');
        } else {
            $data = $this->usersModel->find($id);
            if (strtolower(trim($inisial)) != strtolower(trim($data->inisial))) {
                $valid = $this->usersModel->where('inisial', $inisial)->findColumn('inisial');
            }
        }

        if ($valid) {
            echo json_encode(false);
        } else {
            echo json_encode(true);
        }
    }

    public function coba()
    {
        // dd($this->usersModel->findAll());
        // dd($this->usersModel->where('username', '1232')->findColumn('username'));
    }
}
