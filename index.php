<!DOCTYPE html>
<html lang="tr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ana Sayfa || Web Asistan</title>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Caveat:wght@700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Asap:wght@600&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Amita:wght@700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Baloo+Tammudu+2:wght@600&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="fonts/css/all.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>

	<?php 
		include 'upload/db.php';
	?>
	
	<!-- header -->
		<div id="header">

			
			<!-- header-background -->
				<div id="header-background">

					<!-- header-shadow -->
						<div id="header-shadow"></div>
					<!-- header-shadow -->

					<!-- header-img -->
						<div id="header-slider">
							<img src="" alt="Slider" id="header-background-img" class="slider-img">
							<img src="" alt="Slider" id="header-background-img" class="slider-img">
							<img src="" alt="Slider" id="header-background-img" class="slider-img">
						</div>
					<!-- header-img -->


					<!-- navbar -->
						<nav id="navbar">
							
							<!-- logo -->
								<div id="logo">
									<a href="index.html" title="Foto Galeri">Foto Galeri</a>
								</div>
							<!-- logo -->

							<!-- menu -->
								<nav id="menu">
									<ul>
										<li><a href="index.html" id="active-menu" title="Ana Sayfa"><button>Ana Sayfa&nbsp;<i class="fas fa-home"></i></button></a></li>
										<li><a href="hakkimda.html" title="Hakkımda"><button>Hakkımızda&nbsp;<i class="fas fa-user"></i></button></a></li>
										<li><a href="galeri.html" title="Galeri"><button>Galeri&nbsp;<i class="fas fa-camera"></i></button></a></li>
										<li><a href="iletisim.html" title="İletişim"><button>İletişim&nbsp;<i class="fas fa-phone"></i></button></a></li>
									</ul>
								</nav>
							<!-- menu -->

						</nav>
					<!-- navbar -->

					<!-- header-txt -->
						<div id="header-txt">
							<p></p>
							<a href="galeri.html" title="Galeriye Git">
								<button id="galeri-btn">Galeriye Git&nbsp;<i class="fas fa-arrow-right"></i></button>
							</a>
						</div>
					<!-- header-txt -->


					<!-- slider-dots -->
						<div id="slider-dots">
							<ul>
								<li><div class="slider-dot"></div></li>
								<li><div class="slider-dot"></div></li>
								<li><div class="slider-dot"></div></li>
							</ul>
						</div>
					<!-- slider-dots -->

				</div>
			<!-- header-background -->


		</div>
	<!-- header -->

	<!-- content -->
		<div id="content">
					
			<!-- gallery-content -->
				<div id="gallery-content">
							
					<!-- gallery-header -->
						<header id="gallery-header"><h2>Fotoğraflar</h2></header>
					<!-- gallery-header -->

					<!-- fotograf-arama -->
						<div id="fotograf-arama">
							<input type="search" name="" placeholder="Kategoriyi yazınız yada aşağıdaki mikrofon düğmesine basarak kategoriyi söyleyiniz" id="arama-kutusu">
							<button type="button" id="arama-btn"><i class="fas fa-search"></i></button>
                            <br>
                            <br>
                            <br>
							<button id="mikrofon-btn"><i class="fas fa-microphone-alt"></i></button>
							<p id="asistan-durum"></p>
						</div>
					<!-- fotograf-arama -->

					<!-- photos -->
						<div id="photos">
							<img src="https://www.pandasecurity.com/en/mediacenter/src/uploads/2013/11/pandasecurity-facebook-photo-privacy.jpg" id="galeri" class="galeri" alt="">
							<img src="images/header-background.jpg" alt="" id="galeri" class="galeri">
							<img src="images/header-background.jpg" alt="" id="galeri" class="galeri">
							<img src="https://picjumbo.com/wp-content/uploads/alone-with-his-thoughts-1080x720.jpg" alt="" id="galeri" class="galeri">
							<img src="images/header-background2.jpg" alt="" id="galeri" class="galeri">
							<img src="images/header-background2.jpg" alt="" id="galeri" class="galeri">
							<img src="images/header-background.jpg" alt="" id="galeri" class="galeri">
							<img src="images/header-background.jpg" alt="" id="galeri" class="galeri">


							

						</div>
						
					<!-- photos -->

					<!-- page-numbers -->
						<div id="page-numbers">
							<button>1</button>
							<button>2</button>
							<button>3</button>
							<button>4</button>
							<button>5</button>
						</div>
					<!-- page-numbers -->


					<a href="#fotograf-ekle" title="Fotoğraf Yükle">
						<button id="fotograf-btn">Fotoğraf Yükle&nbsp;<i class="fas fa-upload"></i></button>
					</a>

					<div id="fotograf-ekle">
						
						<header>Fotoğraf Ekleyebilirsiniz <div id="close-window"><button id="close-my-window"><i class="fas fa-window-close"></i></button></div></header>
						
						<div id="foto-form">

							<form action="upload/photo_upload.php" enctype="multipart/form-data" method="post">

								<input type="file" name="photo" id="fotograf-txt" required>

								<fieldset>
									<legend>Kategori</legend>

									<select name="kategori" id="kategori">
										<option value="Doga">Doga</option>
										<option value="Sanat">Sanat</option>
										<option value="Bilim">Bilim</option>
									</select>
								</fieldset>
								

								<button type="submit" name="add-btn" id="upload-btn">Yükle&nbsp;<i class="fas fa-check"></i></button>

							</form>

						</div>

					</div>

				</div>
			<!-- gallery-content -->

		</div>
	<!-- content -->
	<script src="js/jquery-3.6.0.js"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script src="js/index.js"></script>
	
</body>
</html>