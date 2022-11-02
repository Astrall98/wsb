<?php 
session_start();
  // usuwanie użytkownika 
  // print_r($_GET);
  if (!empty($_GET['id'])) {
    // echo $_GET['id'];
    // skrypt usuwający usera
    require_once './connect.php';
    $sql="DELETE FROM users WHERE `users`.`id` = $_GET[id]";
    // $sql="DELETE FROM users WHERE `users`.`id` = 111";
    
    $conn->query($sql);
    if ($conn->affected_rows) {
      // echo "Usunięto rekord o id=$_GET[id]";
      $_SESSION['info'] = "Prawidłowo usunięto rekord o id=$_GET[id]";
    }else{
      // echo "Error!";
      $_SESSION['info'] = "Error";
    }
    // header('location: ../3_connect_tabela_delete.php');
    header('location: ../4_connect_tabela_insert_delete.php');
  }
 ?>