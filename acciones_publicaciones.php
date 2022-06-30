<?php
require_once('publicaciones.php');
$publicaciones=new publicaciones();
$datos=$_REQUEST;
 
  if (isset($_FILES['file'])) {

  	//die('Voy a guardar la imagen');
  	$caracteres_permitidos = '0123456789abcdefghijklmnñopqrstuvwxyz'
  	$longitud = 8;
  	$name=substr(str_shuffle($caracteres_permitidos),0,$longitud);

  	$img= $_FILES['file'];
  	$ext = pathinfo($img['name'], PATHINFO_EXTENSION);

  	move_uploaded_file($img["tmp_name"], "img/{$name.$text}");

  }else{
$user=$datos['user'];
$desc=$datos['desc'];
$est=$datos['est'];
$img=null;
///guardo la publicacion
$publicaciones->store($user,$desc,$est,$img);
///busco el ultimo id de regisstrado
$last=$publicaciones->last_id();
//busco el registro completo 
$registro=$publicaciones->show($last[0]['pub_id']);

echo json_encode($registro);
}

?>


 
