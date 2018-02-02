<?php

// zmienna dla imienia i nazwiska
$name = $_POST["name"];

// zmienna dla adresu email
$mail = $_POST["mail"];

// zmienna dla wiadomości
$message = $_POST["message"];

// mail z którego ma być wysłana wiadomość ?????
$odkogo = "biuro@xxxx.com";

// mail na, który wysyłana jest wiadomość
$dokogo = "kontakt@sandramorawska.pl";

// tytuł wiadomości mail
$tytul = "Formularz kontaktowy";

// treść wiadomości
$wiadomosc = "";
$wiadomosc .= "Imie i nazwisko: " . $name . "\n";
$wiadomosc .= "Mail: " . $mail . "\n";
$wiadomosc .= "Wiadomość: " . $message . "\n";

// UTF-8 do naglowka wiadomości
$naglowek = "";
$naglowek .= "Od:" . $odkogo . " \n";
$naglowek .= "Content-Type:text/plain;charset=utf-8";

// Wysyłanie wiadomości
$sukces = mail($dokogo, $tytul, $wiadomosc, $naglowek);

// Przekierowywujemy na potwierdzenie
if ($sukces){
  print "<meta http-equiv=\"refresh\" content=\"0;URL=kontakt.html\">";
}
else{
	print "<meta http-equiv=\"refresh\" content=\"0;URL=kontakt.html\">";
}
?>