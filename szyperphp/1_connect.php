<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Połączenie z db</title>
  </head>
  <body>
    <h4>Użytkownicy</h4>
<?php 
  require_once './scripts/connect.php';
  $sql = "SELECT * FROM `users`";
  $result = $conn->query($sql);
  $count=0;
  while ($user = $result->fetch_assoc()) {
    $count++;
    echo <<< E
      Użytkownik nr $count<br>
      Imię i nazwisko: $user[name] $user[surname]<br>
      Data urodzenia: $user[birthday]<br>
      Data dodania użytkownika: $user[created_at]
      <hr>
E;
  }
  
  
 ?>
  </body>
</html>