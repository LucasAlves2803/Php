<?php 
 #@$pagina = $_GET['page']; /* O $_GET pega o valor passado pela barra de endereço */
 $pagina = isset($_GET['page']) ? $_GET['page'] : "" ; 
 if ($pagina == 2){
	 include "postagens.php";
 }
 else{
	 include "perfil.php";
 }
 ?>