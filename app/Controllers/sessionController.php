<?php

namespace App\Controllers;

use Core\Controller;
use App\Models\User;

class sessionController extends Controller {

  public function index() {
    if(isset($_POST['email']) && isset($_POST['pass'])) {

      $email = $_POST['email'];
      $pass = $_POST['pass'];

      $user = new User();

      $getEmail = ['email = ' . $email];

      $targetUser = $user->find('*', $getEmail);

      if($targetUser['email'] == $email && $targetUser['password'] == $pass) {
        $this->view('home', ['user' => $targetUser]);
      } else {
        //dados inválidos ou incorretos
        $this->view('error', ['error' => 'Dados inválidos ou incorretos!']);
      }
    } else {
      //preecha os campos
      $this->view('error', ['error' => 'Preencha todos os campos!']);
    }
  }

}