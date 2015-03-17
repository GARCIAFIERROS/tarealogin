<?php
session_start();
  if (isset ( $_SESSION ['admin'])) {
       echo "Bienvenido >>>OSSIRIS<<< :  ".$_SESSION ['admin'];
    } else  {
?>    

<h1>LOGIN PARA INICIAR SESION DE ADMIN</h1>
<form action="comprobacion.php" method="post">
Usuario <br>
<input   type="text" name="user"><br>
Password<br>
<input type ="password" name="pass"><br>
<input type = submit value="Iniciar session">
</form><br>

<?php
 if  ( isset ( $_SESSION [ 'Llene' ] )) {
echo $_SESSION ['Llene'];
unset ( $_SESSION [ 'Llene' ] );
}        elseif (isset ($_SESSION ['error'] )) {
echo $_SESSION ['error'];
unset ( $_SESSION [ 'error' ] );
}
}
?>
