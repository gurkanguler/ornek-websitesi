<?php 

	try{

		$db = new PDO("mysql:host=localhost; dbname=web_asistan;", "root", "");

		$db -> query("SET NAMES UTF8");
	}


	catch(PDOException $e){

		echo $e->getMessage();
	}

?>