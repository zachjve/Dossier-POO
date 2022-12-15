<?php


  require_once 'vendor/autoload.php';

  $_page = 'home'; //film, série, réalisateur...
  $_action = 'list'; //list, detail, create
  $_id = 0;

  if (isset($_GET['page']) && !empty(trim($_GET['page']))) {
    $get_page = trim($_GET['page']);
    $tab_page = ['film', 'serie', 'realisateur'];

    //Option ternaire
    $_page = (in_array($get_page, $tab_page)) ? $get_page : 'home';
}

// Option complète Switch
// switch ($get_page) {
//   case 'film':
//     $_page = 'film';
//     break;
//   case 'serie':
//     $_page = 'serie';
//     break;
//   case 'realisateur':
//     $_page = 'realisateur';
//     break;
//   case 'home':
//   case '':
//   default:
//     $_page = 'home';
//     break;
// }

  if (isset($_GET['action']) && !empty(trim($_GET['action']))) {
    $get_action = trim($_GET['action']);
    $tab_action = ['list', 'detail', 'create'];

    $_action = (in_array($get_action, $tab_action)) ? $get_action : 'list';
  }

  //echo $_page . ' ' . $_action;
  //creation du lien au loader qui mene au controller
  $controller = "App\\" . ucfirst(strtolower($_page));
  //echo $controller;
  $page = new $controller;
  // print_r($rendu = $page->$_action());

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