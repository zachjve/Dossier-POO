<?php

  require_once 'vendor/autoload.php';

  $_page = 'home';
  $_action = 'list';
  $_id = 0;

  if (isset($_GET['page']) && !empty(trim($_GET['page']))) {
    $get_page = trim($_GET['page']);
    $tab_page = ['film', 'serie', 'realisateur'];

    switch ($get_page) {
      case 'film':
        $_page = 'film';
        break;
      case 'serie':
        $_page = 'serie';
        break;
      case 'realisateur':
        $_page = 'realisateur';
        break;
      case 'home':
      case '':
      default:
        $_page = 'home';
        break;
    }
  }

  if (isset($_GET['action']) && !empty(trim($_GET['action']))) {
    $get_action = trim($_GET['action']);
    $tab_action = ['list', 'detail'];

    switch ($get_action) {
      case 'detail':
        $_action = 'detail';
        break;
      case 'list';
      case '':
      default:
        $_action = 'list';
        break;
    }
  }

  //echo $_page . ' ' . $_action;
  //creation du lien au loader qui mene au controller
  $controller = "App\\" . ucfirst(strtolower($_page));
  //echo $controller;
  //instancier le controller
  $page = new $controller;

  if (isset($_GET['id']) && !empty(trim($_GET['id']))) {
    $_id = trim($_GET['id']);
  }

  if ($_action == 'detail') {
    $data = $page->$_action($_id);
  } 
  else {
    $datas = $page->$_action();
  }

  // include_once 'views/' . $_page . '/' . $_action . '.php';
  require_once 'views/base.php';

?>