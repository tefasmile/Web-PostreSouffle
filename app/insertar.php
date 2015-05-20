<?php
	include("conexion.php");
?>

<form action="" method="POST">
	Nombre:<input name="nom"><br />
	Email: <input name="email"><br />
	Asunto: <input name="as"><br />
	Mensaje: <textarea name="men" placeholder="Mensaje" required></textarea><br />
<input type="submit" value="submit" name="enviar"/>
</form>

<?php
	if($_POST){//si ha presionado enviar
		$n=$_POST['nom'];
		$e=$_POST['email'];
		$a=$_POST['as'];
		$m=$_POST['men'];
		mysql_query("insert into usuario(nombre,email,asunto,mensaje)values('$n','$e','$a','$m')")or die(mysql_error());
		echo "<script>function enviar(){alert("Datos Guardados Correctamente");return true;}</script>";
	}
?>

//codi1
<?php
 
	// if(isset($_POST['enviar'])){
	//    alert("Datos Guardados Correctamente");
	// }
?>


//codigo2
<?php   
function enviar()
{   
echo "alert('Datos Guardados Correctamente')";  

}  
?>//funcion de enviar


 if(isset($_POST['nom'])){//si ha presionado enviar






