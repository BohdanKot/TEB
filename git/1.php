<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
  <!-- kommentarz w html -->
<?php
//kommentarz w jendej linii
/*
kommentarz w wielu liniach
*/

//.konkatynacjua
$name='Janusz';
$surrname='Kowalski' ;
echo "imie"." i nazwisko: $name "." $surname";
$text ="<br>Imie i nazwisko: ";
$text .=$name;
echo $text;
$text = $surname;
echo "$text<br>"

// , interpolacja
echo "imie ","i nazwisko";
  </body>
</html>
