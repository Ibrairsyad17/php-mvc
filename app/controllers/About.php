<?php

class About extends Controller
{
  public function index($name = 'User', $role = 'Anggota')
  {
    $data['name'] = $name;
    $data['role'] = $role;
    $data['judul'] = 'About';
    $this->view('templates/header', $data);
    $this->view('about/index', $data);
    $this->view('templates/footer');
  }

  public function page()
  {
    $this->view('templates/header');
    $this->view('about/page');
    $this->view('templates/footer');
  }
}
