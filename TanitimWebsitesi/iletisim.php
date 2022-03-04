<?php
	if(isset($_POST["buton_go"])){
		$kime = $_POST["mail"];
		$konu = $_POST["konu"];
		$mesaj = "<h1>".$_POST["mesaj"]."</h1>";
		$baslik = "From: ". $_POST["ad"] . $_POST["soyad"] ."<".$_POST["mail"].">\r\n";
		$baslik .= "Reply-to : projemailidir@gmail.com\r\n";
		$baslik .= "Content-type: text/html\r\n";


		if(mail("$kime","$konu","$mesaj","$baslik")){
			echo '<script type="text/javascript">';
			echo 'alert("Mail başarıyla gönderilmiştir.")';
			echo '</script>';
		}
		else{
			echo '<script type="text/javascript">';
			echo 'alert("Mail gönderilemedi.")';
			echo '</script>';
			}
		error_reporting(E_ALL);
	}
?>
<!doctype html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<link rel="stylesheet" href="style/style.css">	
<title>index</title>
</head>
<body>
	<section class="backgroundtemplateeee">
	<div class="baslik">
		<div class="navbarcontainer">
			
		<div class="navigasyonbar">
			<div class="navfoto">
				<a class="logogoto" href="index.html"><img class="basliklogo" src="images/razer.png"></a>
			</div>
			<div class="dropdown">
			  <button onclick="myFunction()" class="dropbtn">|||</button>
			  <div id="myDropdown" class="dropdown-content">
					<a href="index.html">Anasayfa</a>
					<a href="howto.html">Nasıl Çalışır?</a>
					<a href="sss.html">SSS</a>
					<a href="#">İndir</a>
					<a href="iletisim.php">İletişim</a>			
			  </div>
			</div>
			<div class="navbarlinks">
					<a href="index.html">Anasayfa</a>
					<a href="howto.html">Nasıl Çalışır?</a>
					<a href="sss.html">SSS</a>
					<a href="#">İndir</a>
					<a href="iletisim.php">İletişim</a>			
			</div>
		</div>
	</div>
	</div>
	<div class="ana">
		<div class="anacontainerr">
			<div class="icyazicontainer">
				<div class="iletisimmap">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8836.629805170174!2d27.10220915989782!3d38.459472086192186!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4e042c7e5d3e9e7c!2sWEBCEN%20Bili%C5%9Fim!5e0!3m2!1str!2str!4v1611462481790!5m2!1str!2str" width="100%" height="500" frameborder="0" style="border:0;" allowfullscreen="false" aria-hidden="false" tabindex="0"></iframe>
				</div>
			</div>
			<div class="iletisimformu">
				<div class="containeriletisim">
				  <form method="post" action="iletisim.php" enctype="multipart/form-data">
					<label for="ad">Ad</label>
					<input type="text" id="fname" name="ad" placeholder="Adınızı Yazınız...">

					<label for="soyad">Soyad</label>
					<input type="text" id="lname" name="soyad" placeholder="Soyadınızı yazınız...">

					<label for="mail">E-Mail</label>
					<input type="text" id="mail" name="mail" placeholder="Mail Adresinizi yazınız...">  

					<label for="konu">Konu</label>
					<input type="text" id="konu" name="konu" placeholder="Konu yazınız...">  

					<label for="mesaj">Mesaj</label>
					<textarea id="mesaj" name="mesaj" placeholder="Buraya Yazınız..." style="max-height: 90px;"></textarea>

					<input type="submit" name="butongo" class="buttonn buttonbottom" value="Gönder"/>

				  </form>
				</div>
			</div>
		</div>
	</div>
	</section>
	<section class="footerbg">
		<div class="footer">
			<!--<div class="footerbottom">
				<div class="iletisimbar">
					<div class="iletisimleft">
					<h3>İLETİŞİME GEÇ</h3>
					<p>Benimle Discord veya kişisel E-Posta adresim üzerinden rahatlıkla iletişime geçebilirsiniz.</p>
					</div>
					<div class="iletisimright">
						<a class="buttonn buttonbottom" href="iletisim.html" role="button">İletişim</a>
					</div>
				</div>
			</div>-->
			<div class="ortalafooter">
        		<div class="ikisutun">
          			<h4>Razer Cortex Game Booster ®</h4>
          			<p>Proje üzerine açılmış bir websitesidir.</p>
        		</div>
        		<div class="teksutun">
          		<h4>Kullanışlı Linkler</h4>
          				<ul class="blank">
            				<li><a href="index.html">Anasayfa</a></li>
            				<li><a href="howto.html">Nasıl Çalışır?</a></li>
							<li><a href="sss.html">SSS</a></li>
            				<li><a href="#">İndir</a></li>
							<li><a href="iletisim.php">İletişim</a></li>
          				</ul>
        		</div>
        		<div class="teksutun">
          			<h4>Sosyal Medya</h4>
          				<ul class="blank">
            				<li><a href="https://www.twitter.com" target="_blank">Twitter</a></li>
            				<li><a href="https://www.facebook.com" target="_blank">Facebook</a></li>
            				<li><a href="https://www.instagram.com/erencoskun_" target="_blank">Instagram</a></li>
          				</ul>
        		</div>
      		</div>
		</div>
	</section>
		<script>

		function myFunction() {
		  document.getElementById("myDropdown").classList.toggle("show");
		}


		window.onclick = function(event) {
		  if (!event.target.matches('.dropbtn')) {
			var dropdowns = document.getElementsByClassName("dropdown-content");
			var i;
			for (i = 0; i < dropdowns.length; i++) {
			  var openDropdown = dropdowns[i];
			  if (openDropdown.classList.contains('show')) {
				openDropdown.classList.remove('show');
			  }
			}
		  }
		}
		</script>

</body>
	
</html>

