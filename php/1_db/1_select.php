<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Użytkownicy</title>
  </head>
  <body>
    <h3>Użytkownicy z tabeli users</h3>
    <table>
      <tr>
        <th>Imię i nazwisko</th>
        <th>Miasto</th>
        <th>Data utworzenia konta</th>
      </tr>
    <?php
      require_once('./scripts/1_connect.php');
      $count = 0;
      $sql = "SELECT * FROM `users` INNER JOIN `cities` ON `users`.`city_id` = `cities`.`id`";
      $result = $connect->query($sql);
      while ($user = $result->fetch_assoc()) {
        $count++;
        echo <<< E
        <tr>
        <td>$user[name] $user[surname]</td>
        <td>$user[city]</td>
        <td>$user[created_at]
        </tr>
        E;
      }
    ?>
    </table>
  </body>
</html>
