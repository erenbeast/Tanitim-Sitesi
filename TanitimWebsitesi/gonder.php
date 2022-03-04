<?php

		$kime = $_POST["mail"];
		$konu = $_POST["konu"];
		$mesaj = "<h1>".$_POST["mesaj"]."</h1>";
		$baslik = "From: ". $_POST["ad"] . $_POST["soyad"] ."<".$_POST["mail"].">\r\n";
		$baslik .= "Reply-to : projemailidir@gmail.com\r\n";
		$baslik .= "Content-type: text/html\r\n";


		if(mail($kime,$konu,$mesaj,$baslik)){
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


?>