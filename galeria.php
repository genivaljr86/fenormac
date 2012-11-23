<?php
include("core.php");
require('./wordpress/wp-load.php');
$album=$_GET["album"];
$link_pasta = get_servidor().'wordpress/wp-content/uploads/wppa/';
$sql     = 'SELECT id , ext , description FROM wp_wppa_photos WHERE album=1 ORDER BY id DESC';
$links   = $wpdb->get_results( $sql );
$imgs=array();
$j="";
foreach($links as $link){
	$url=$link_pasta.$link->id.'.'.$link->ext;
	$desc=$link->description;
	$imgs[]=array("links"=>$url,"desc"=>$desc);
	$j++;
	}
//Numero de Imagens por Página
$imgpg=2;
	
//Descobrindo o numero de posts
$numposts =$j;
//Pegando a pagina atual
$pg2802=$_GET["pg"];

//Indicando que caso a pagina atual não seja definida, adotar o valor descrito
if($pg2802==""){$pg2802=1;}

$paginacao = new Paginacao;          //Criando Objeto para paginação, em seguida instanciamos...
$paginacao->set_numposts($numposts); //... o número total de posts.
$paginacao->set_porpg(2);            //... o número de posts por página.
$paginacao->set_pg_atual($pg2802);   //... a pagina atual.
$inicio=($pg2802*$imgpg)-$imgpg;  	 //Definindo inicio do loop...
$limite=$inicio+$imgpg;				 //... e o fim.

$saida=array();
for($i=$inicio; $i<$limite;$i++){
	$saida[]= $imgs[$i];
	}
$json = json_encode($saida);
//$json = json_encode($imgs);
echo $json;

?>