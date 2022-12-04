<?php

namespace App\Controllers;

use Core\Controller;
use App\Models\User;

class sessionController extends Controller {

  public function index() {
    $email = $_POST['email'];
    $user = new User();
    $targetUser = $user->find(null, 'email = ' . $email);

    $this->view('home', ['user' => $targetUser]);
  }

}