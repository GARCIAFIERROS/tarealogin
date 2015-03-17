<?php
session_start();
if ($_POST ['user']  !=""  AND $_POST ['pass'] !="")   {
	if($_POST ['user'] =="OSSIRIS" and  $_POST [ 'pass' ]  == "AMPprimas")  {
		$_SESSION ['admin']  = $_POST [ 'user' ] ;
	        } else {
	           $_SESSION ['error'] ="Login incorrecto";
	     }
     }  else   {
	         $_SESSION ['llene']  ="Llene   los   campos";
 }
header ("location:index.php");
?>