<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    if (empty($_POST)) {
      echo "Wypelni wszystkie Dane!";
    } else {
      $a=str_replace(',',".",$_POST['a']);
      $area=$a**2;
      $rectangle=4*$a;

      echo <<< RES
        Obliczenia <br>
        Strona kwadratu $a <br>
        Pole $area cm <sup>2</sup> <br>
        Obwód $rectangle
      RES;
    }
  ?>

  </body>
</html>
