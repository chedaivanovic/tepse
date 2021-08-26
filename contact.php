<?php
if ($_POST) {
	require('constant.php');

	$user_name      = filter_var($_POST["name"], FILTER_SANITIZE_STRING);
	$user_email     = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
	$user_phone     = filter_var($_POST["phone"], FILTER_SANITIZE_STRING);
	$content   = filter_var($_POST["message"], FILTER_SANITIZE_STRING);

	if (empty($user_name)) {
		$empty[] = "Ime";
	}
	if (empty($user_phone)) {
		$empty[] = "Broj telefona";
	}
	if (empty($content)) {
		$empty[] = "Poruka";
	}

	if (!empty($empty)) {
		if (count($empty) == 1) {
			$output = json_encode(array('type' => 'error', 'text' => implode(", ", $empty) . ' polje je obavezno!'));
		} else {
			$output = json_encode(array('type' => 'error', 'text' => implode(", ", $empty) . ' polja su obavezna!'));
		}
		die($output);
	}
	if ($user_email != '') {
		if (!filter_var($user_email, FILTER_VALIDATE_EMAIL)) { //email validation
			$output = json_encode(array('type' => 'error', 'text' => '<b>' . $user_email . '</b> nije ispravna e-mail adresa,molim vas ispravite.'));
			die($output);
		}
	}

	//reCAPTCHA validation
	if (isset($_POST['g-recaptcha-response'])) {

		require('recaptcha/src/autoload.php');

		$recaptcha = new \ReCaptcha\ReCaptcha(SECRET_KEY);

		$resp = $recaptcha->verify($_POST['g-recaptcha-response'], $_SERVER['REMOTE_ADDR']);

		if (!$resp->isSuccess()) {
			$output = json_encode(array('type' => 'error', 'text' => 'Captcha validacija je obavezna!'));
			die($output);
		}
	}

	$toEmail = "office@tepihservisidubinsko.rs";
	if ($user_email != '') {
		$mailHeaders = "Od: " . $user_name . "<" . $user_email . ">\r\n";
	} else {
		$mailHeaders = "Od: " . $user_name . "\n";
	}
	$mailBody = "Korisnik: " . $user_name . "\n";

	if ($user_email != '') {
		$mailBody .= "Email korisnika: " . $user_email . "\n";
	}
	$mailBody .= "Telefon korisnika: " . $user_phone . "\n";
	$mailBody .= "Poruka: " . $content . "\n";

	if (mail($toEmail, "Kontakt mail", $mailBody, $mailHeaders)) {
		$output = json_encode(array('type' => 'message', 'text' => 'Pozdrav ' . $user_name . ', hvala na vašoj poruci, odgovorićemo vam uskoro!'));
		die($output);
	} else {
		$output = json_encode(array('type' => 'error', 'text' => 'Niste poslali poruku, molim vas kontaktirajte office@tepihservisidubinsko.rs'));
		die($output);
	}
}
