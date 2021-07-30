<?php

$pageInfo = [];

if (is_home()){
	$pageInfo["title"] = "Solarium Móveis | Solarium.com";
	$pageInfo["description"] = "Dicas para limpar o seu nome, quitar dívidas e economizar. O Eu Dou Conta te ajuda a organizar a sua vida financeira com informações fáceis de entender. Vem conferir.";
	$pageInfo["canonical"] = get_bloginfo('url')."/";
	$pageInfo["image"] =  get_stylesheet_directory_uri()."/build/img/capa-eu-dou-conta.jpg";
}

?>