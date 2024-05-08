<?php

	include 'helpers.php';

	// enable CORS and set JSON Content-Type

	setHeaders();

	// declare manifest

	$manifest = new stdClass();
	$manifest->id = "com.stremio.ricos";
	$manifest->icon = "https://www.canalricos.com.br/public/66970-2024-01-02.png";
	$manifest->version = "1.0.0";
	$manifest->name = "Canal Ricos Addon";
	$manifest->description = "Canal Ricos - Perus, São Paulo, Whatsapp: (11) 99105-1755";
	$manifest->resources = array("catalog", "meta", "stream");
	//$manifest->types = array("movie");
	$manifest->types = array("tv");
	$manifest->idPrefixes = array("ricos_");

	// $manifest->resources = array(
	// 	"catalog",
	// 	//array("idPrefixes" => array("hpy"), "name" => "meta", "types" => array("series")),
	// 	//array("idPrefixes" => array("tt", "hpy"), "name" => "stream", "types" => array("movie", "series"))
	// 	array("idPrefixes" => array("tv"), "name" => "stream", "types" => array("tv"))
	// );
	
	//$manifest->types = array("movie", "series");

	

	// define catalog

	// modo 1 catalogo
	// $catalog = new stdClass();
	// $catalog->type = "tv";
	// $catalog->id = "channels";
	// $catalog->name = "Abertos";

	//$catalogs = array($catalog); // Adicione o catálogo à lista de catálogos

	// modo varios catalogos
	$catalogs = array();

	// Catalog 1: Abertos
	$abertosCatalog = new stdClass();
	$abertosCatalog->type = "tv";
	$abertosCatalog->id = "ricos_catalogo";
	$abertosCatalog->name = "Ricos";
	$catalogs[] = $abertosCatalog;

	#Catalog 2: teste
	// $testeCatalog = new stdClass();
	// $testeCatalog ->type = "tv";
	// $testeCatalog ->id = "oneplay_teste";
	// $testeCatalog ->name = "Teste";
	// $catalogs[] = $testeCatalog;	
	



	// set catalogs in manifest

	$manifest->catalogs = $catalogs;


	// print manifest in JSON format

	echo json_encode((array)$manifest);

?>