<?php
  $servidor="localhost";
  $usuario="root";
  $clave="";
  $base="postres_souffle";
  mysql_connect($servidor,$usuario,$clave);
  mysql_select_db($base);
?>
<?php
  if($_POST){//si ha presionado enviar
    $n=$_POST['nom'];
    $e=$_POST['email'];
    $a=$_POST['as'];
    $m=$_POST['men'];
    mysql_query("insert into postres_souffle(nombre,email,asunto,mensaje)values('$n','$e','$a','$m')")or die(mysql_error());
    echo "<h2>Dato Guardado</h2>";
  }
?>