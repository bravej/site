<?php
	$monMail = "julienmarie83560@gmail.com";
	$nom = $_POST["nom"];
	$mail = $_POST["email"];
	$subject = $_POST["objet"];
	$message = "Mail envoyé depuis mon site : " . "\n". "mail de : " . $nom . "\n" . "son mail : " 
			    . $mail . "\n". "message : " . $_POST["message"];	
	mail($monMail, $subject, $message);
	header('location: ../index.html');
?>