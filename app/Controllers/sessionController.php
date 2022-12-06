<?php

namespace App\Controllers;

use Core\Controller;
use App\Models\User;

class sessionController extends Controller {

  public function index() {
    if(isset($_POST['email']) && isset($_POST['password'])) {

      $email = $_POST['email'];
      $pass = $_POST['password'];

      $user = new User();

      $getEmail = ['email = ' . $email];

      $targetUser = $user->find('*', $getEmail);
      
      foreach($targetUser as $data) {
        if($data['email'] == $email && $data['password'] == $pass) {
          $this->view('home', ['user' => $targetUser]);
        } else {
          //dados inválidos ou incorretos
          $this->view('error', ['error' => 'Dados incorretos ou inválidos!']);
        }
      }
    } else {
      //preecha os campos
      $this->view('error', ['error' => 'Preencha todos os campos!']);
    }
  }
}