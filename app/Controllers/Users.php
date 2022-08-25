<?php

namespace App\Controllers;

use App\Entities\UsersLevelEntity;
use App\Libraries\ModelLoader;
use App\Models\UsersLevelModel;
use App\Models\UsersModel;

class Users extends BaseController
{
    protected $model;
    protected $levelModel;
    protected $bidangModel;

    public function __construct()
    {
        $this->model = ModelLoader::fetch('UsersModel');
        $this->levelModel = ModelLoader::fetch('UsersLevelModel');
        $this->bidangModel = ModelLoader::fetch('BidangModel');
    }

    public function index()
    {
        $data = [
            'title'  => 'Data User',
            'users'  => $this->model->findAll(),
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
        }
    }

    public function updateuser($id)
    {
        if ($this->request->getMethod() == "post") {
        }
    }
}
