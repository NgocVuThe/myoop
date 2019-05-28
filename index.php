<?php
       require __DIR__ . '/vendor/autoload.php';

      use \App\Model\BaseModel;
  
      $db = new BaseModel();
      $controller = "";
      $url = $_GET['controller'] ?? 'index';
      switch ($url) {
          case 'index':
               require_once('src/view/ListView.php');
               break;
      }
?>