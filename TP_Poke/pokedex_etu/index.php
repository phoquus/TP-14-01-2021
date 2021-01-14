<?php
$link=mysqli_connect("loaclhost","root","root","pokedex");
if(!link)
{
  echo "erreur" . PHP_EOL;
  echo "Errno de débogage : " . mysqli_connect_errno() . PHP-EOL;
  echo "Erreur de débogage : " . mysqli_connect_error() . PHP_EOL;
  exit;
}

$res = link->query("SELECT id,identifier,height,weight,base_experience FROM pokemon");
if ($res)
{
  while($row = mysqli_fetch_array($res, MYSQLI_ASSOC))
}
echo $row['identifier'];

  ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title>Pokedex</title>
  </head>
  <body>
 <h1>My Pokedex</h1>
    <table>

      <thead>

        <tr>
          <th>Sprite</th>
          <th>ID</th>
          <th>Name</th>
          <th>Height</th>
          <th>Weight</th>
          <th>Base exp</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><img src="sprites/bulbasaur.png" alt="bulbasaur"></td>
          <td>1</td>
          <td>bulbasaur</td>
          <td>7</td>
          <td>69</td>
          <td>64</td>
        </tr>
        <tr>
          <td><img src="sprites/ivysaur.png" alt="bulbasaur"></td>
          <td>2</td>
          <td>ivysaur</td>
          <td>10</td>
          <td>130</td>
          <td>1</td>
        </tr>
          <?php

foreach($stats as $key)
{?><tr>
  <td><img src="sprites/ivysaur.png" alt="bulbasaur"></td>
  <td>2</td>
  <td>ivysaur</td>
  <td>10</td>
  <td>130</td>
  <td>1</td>
</tr><?php}



           ?>
        </tr>
      </tbody>
      ?>
    </table>
  </body>
</html>
