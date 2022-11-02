<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./css/style.css">
    <title>Połączenie z db</title>
  </head>
  <body>
    <h4>Użytkownicy</h4>
    <table>
      <tr>
        <th>Imię i nazwisko</th>
        <th>Miasto</th>
        <th>Data urodzenia</th>
        <th>Data dodania użytkownika</th>
      </tr>
<?php
  require_once './scripts/connect.php';
  // $sql = "SELECT * FROM `users`";
  $sql = "SELECT users.id, users.name, users.surname, cities.city, users.created_at FROM `users` INNER JOIN `cities` ON `users`.`city_id`=`cities`.`id`;";
  $result = $conn->query($sql);
  $count=0;
  while ($user = $result->fetch_assoc()) {
    echo "<tr>";
    $count++;
    echo <<< E
    <tr>
      <td>$user[name] $user[surname]</td>
      <td>$user[city]</td>
      <td>$user[birthday]</td>
      <td>$user[created_at]</td>
      <td><a href='./scripts/delete.php?userid=$user[id]'>Usuń</a></td>
      </tr>
E;
    echo "</tr>";
  }
  echo "</table>";
 ?>
  </body>
</html>
