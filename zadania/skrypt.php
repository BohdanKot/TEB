<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Pole i obwod</title>
  </head>
  <body>
<?php
if(!empty($POST['sideA']) && !empty($_POST['sideB'])) {
  $a=str_replace(",", ".", $_POST['sideA']);
  $b=str_replace(",", ".", $_POST['sideB']);
  $area=$a*$b;
  $rectrangle=2*$a+2*$b;

    echo <<< RESULT
      Długosci boków:<br>
      a = $a, b = $b<hr>
      Pole wynosi: $area cm<sup>2</sup><br>
      Obwód wynosi: $rectangle cm<br>
RESULT;
}else{
  echo "wypelni wszystkie dane prawidłowo!";
  }
  echo str_replace(",", ".", "3,5");

 ?>

  </body>
</html>
