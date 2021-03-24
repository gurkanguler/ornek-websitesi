
let header_speed = 50;
let header_count = 0;



let Header = () => {

	let header_txt = document.querySelector("#header-txt p");
	
	let header_msg = "Fotoğraf Galerisine Hoş Geldiniz...";

	if(header_count <= header_msg.length){
		header_txt.innerHTML += header_msg.charAt(header_count);
		header_count++;
		setTimeout(Header,header_speed); 
	}
}


let slider_count = 0;


let Slider = () => {

	let slider_images_arry = ["images/header-background.jpg", "images/header-background2.jpg","images/header-background3.jpg" ];

	let slider_img = document.querySelectorAll("#header-slider img");

	let slider_dots = document.querySelectorAll("#slider-dots .slider-dot");

	for(let i = 0 ; i < slider_img.length; i++){
		slider_img[i].src = slider_images_arry[i];
		slider_img[i].style.display = 'none';
		
	}

	for(let i = 0; i < slider_dots.length; i++){
		slider_dots[i].className = slider_dots[i].className.replace("slider-active", "");
	}

	slider_count++;

	if(slider_count > slider_img.length){slider_count = 1}

	slider_img[slider_count-1].style.display = 'block';
	slider_dots[slider_count-1].className += ' slider-active';

	setTimeout(Slider, 2500);
}


let photo_click = () => {

	let photos = document.querySelectorAll("#content > #gallery-content > #photos > img");

	for(let i = 0 ; i < photos.length; i++){
		$(photos[i]).hover(function(){
			$(photos[i]).css("transform", "scale(1.6)");
		});
		$(photos[i]).mouseleave(function(){
			$(photos[i]).css("transform", "scale(1.0)");
		});
	}
}



let arama_kutusu = () => {

	let arama_btn = document.getElementById("arama-btn");

	const kategoriler = ["doğa", "teknoloji", "bilim", "sanat", "portre"];

	arama_btn.addEventListener("click", () => {

		let aranacak_kelime = document.getElementById("arama-kutusu").value;

		if(aranacak_kelime == ""){
			swal("Hata!", "Lütfen Arama Kutusunu Boş Bırakmayınız", "error");
		}

		else{

			for(let kategori_sayac = 0; kategori_sayac < kategoriler.length; kategori_sayac++){

				if(aranacak_kelime == kategoriler[kategori_sayac]){
					swal("Kategori Bulundu!", "Lütfen Bekleyiniz", "success");
				}
				else{
					swal("Hata!", "Kategori Bulunamadı\n\nKategoriler:\n\n"+kategoriler+"\n", "error");
				}
			}

		}

	});

	let asistan_btn = document.getElementById("mikrofon-btn");

	asistan_btn.addEventListener("click", () => {
		
		let asistan_durum = document.getElementById("asistan-durum");
	
		let asistan = window.SpeechRecognition || window.webkitSpeechRecognition;

		let asistan_recog = new asistan();

		asistan_recog.lang = 'tr-TR';
		
		asistan_recog.onstart = () => {
			asistan_durum.innerText = "Sizi Dinliyorum Efendim...";

		}

		asistan_recog.onresult = (event) => {
			const current = event.resultIndex;
		    const transcript = event.results[current][0].transcript;
		    mesaji_oku(transcript);
		}

		asistan_recog.start();

		// okuma fonksiyonu

		let mesaji_oku = (mesaj) => {

			let konusma = new SpeechSynthesisUtterance();

			konusma.rate = 1.0;

			konusma.volume = 1.0;

			konusma.lang = 'tr-TR';

			

			

			for(let kategoriler_sayac = 0; kategoriler_sayac < kategoriler.length; kategoriler_sayac++){

				if(mesaj == kategoriler[kategoriler_sayac]){
					konusma.text = "Lütfen Bekleyiniz.";
					window.speechSynthesis.speak(konusma);
				}

				else{
					konusma.text = "Kategori Bulunamadı";
					window.speechSynthesis.speak(konusma);
					break;
				}
			}
		}

	});



}



let pagenigition = () => {

	let page_numbers = document.querySelectorAll("#page-numbers button");

	let photos = document.querySelectorAll("#photos img");

	for(let i = 0; i < photos.length; i++){

		if(i > 2){
			photos[i].style.display = 'none';
		}
	}

	let loop = 0;

	for(let i = 0; i < page_numbers.length; i++){

		page_numbers[i].addEventListener("click", () => {
			
			let number = page_numbers[i].innerText;

			if(number == 1){
				loop = 0;
				while (loop <= 2) {
					photos[loop].style.display = 'block';
					loop++;
				}
				
				while(loop >= 3){
					photos[loop].style.display = 'none';
					loop++;
				}
				loop = 0;
			}
		
			if(number == 2){

				loop = 3;
				while(loop <= 5){
					photos[loop].style.display = 'block';
					loop++;
				}
				loop = 2;
				while(loop >= 0){
					photos[loop].style.display = 'none';
					loop--;
				}
			}

			if(number == 3){

				loop = 5;
				while(loop <= 7){
					photos[loop].style.display = 'block';
					loop++;
				}
				loop = 5;
				while(loop >= 0){
					photos[loop].style.display = 'none';
					loop--;

				}
			}

		})
	}

}

window.onload = () => {
	Header();
	Slider();
	arama_kutusu();
	pagenigition();
	$(document).ready(function(){
		photo_click();
	
	});
}
