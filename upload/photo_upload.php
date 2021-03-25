<?php 
	
	include 'db.php';

	if(isset($_POST["add-btn"])){


		$path = "photos/";

		$photo = $_FILES["photo"]["name"];

		$tmp_names = $_FILES['photo']["tmp_name"];

		$photo_type = $_FILES["photo"]["type"];

		$fdir = $path.$photo;

		if($photo_type == "image/png" || $photo_type == "image/jpg" || $photo_type == "image/jpeg"){


			if(move_uploaded_file($tmp_names, $fdir)){

				$add = $db->query("INSERT INTO fotograf(foto,kategori) VALUES('".$photo."','Doga')");
			}

		}


	};

?>