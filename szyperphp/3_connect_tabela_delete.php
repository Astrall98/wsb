<?php 
  session_start();
 ?>
<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./css/style.css">
    <title>Połączenie z db</title>
  </head>
  <body>
    <h4>Użytkownicy</h4>
    <?php 
      if (isset($_SESSION['info'])) {
        echo "Komunikat: $_SESSION[info]";
        unset($_SESSION['info']);
      }
     ?>
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
  $sql = "SELECT users.id, name, surname, city, birthday, created_at FROM `users` INNER JOIN `cities` ON `users`.`city_id`=`cities`.`id`;";
  $result = $conn->query($sql);
  $count=0;
  while ($user = $result->fetch_assoc()) {
    echo "<tr>";
    $count++;
    echo <<< E
      <td>$user[name] $user[surname]</td>
      <td>$user[city]</td>
      <td>$user[birthday]</td>
      <td>$user[created_at]</td>
      <td><a href="./scripts/delete.php?id=$user[id]">Usuń</a></td>
E;
    echo "</tr>";
  }
  echo "</table>";
  $conn->close();
 ?>
 
  </body>
</html>