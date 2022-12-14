<?php

namespace App\Controllers;

use Core\Controller;
use App\Models\Note;

class saveController extends Controller {

  public function index() {
    if(isset($_POST['title']) && isset($_POST['content'])) {

      $title = $_POST['title'];
      $content = $_POST['content'];

      $note = new Note();

      $getContent = ['title = ' . $title];

      $post = ['title'=>$title, 'content'=>$content];
      $note->saveContent($post);
      $posts = $note->getAllContent();
      $this->view('notes', ['post' => $posts]);
    } else {
      //preecha os campos
      $this->view('error', ['error' => 'Preencha todos os campos!']);
    }
  }
}