<?php

namespace App\Controllers;

use App\Core\Controller;

class Paket extends Controller
{
     public object $model;

     public function __construct()
     {
          parent::cekLogin();

          $this->model = new \App\Models\Paket();
     }

     public function index()
     {
          $data['rows'] = $this->model->show();
          $this->dashboard('paket/index', $data);
     }

     public function input()
     {
          $this->dashboard('paket/input');
     }

     public function save()
     {
          $this->model->save();
          header('location:' . URL . '/paket');
     }

     public function edit($id)
     {
          $data['row'] = $this->model->edit($id);
          $this->dashboard('paket/edit', $data);
     }

     public function update()
     {
          $this->model->update();
          header('location:' . URL . '/paket');
     }
}
