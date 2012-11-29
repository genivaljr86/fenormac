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
//  $imgs[]=array("links"=>$url,"desc"=>$desc);
	$imgs[]='<a href="'.$url.'"rel="prettyPhoto" title="'.$desc.'"><img src="'.$url.'" alt=""></a>';
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

echo '<div class="imagens">';
for($i=$inicio; $i<$limite;$i++){
	echo $imgs[$i];
	}
echo '</div>';
/*
$saida=array();
for($i=$inicio; $i<$limite;$i++){
	$saida[]= $imgs[$i];
	}
$json = json_encode($saida);
*/
?>
<div class="separator"></div>
<div class="paginacao centraliza">
<?php if($paginacao->has_anterior()){ ?>	
	<span class="anterior"><img src="images/galeria/ant_on.png" alt="" class="botao" title="Anterior"></span>
<?php }if($paginacao->has_proximo()){ ?>	
	<span class="proximo"><img src="images/galeria/prox_off.png" alt="" class="botao" title="Próxima"></span>
<?php } ?>
</div>