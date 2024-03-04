<?php

class User extends Controller
{
  public function index()
  {
    $data['judul'] = 'List User';
    $data['name'] = $this->model('User_model')->getName();
    $this->view('templates/header', $data);
    $this->view('user/index', $data);
    $this->view('templates/footer');
  }
}
