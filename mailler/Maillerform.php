
<?php
$filepath = realpath(dirname(__FILE__)); 
include_once($filepath . '/../helpers/Format.php');
require_once("class.phpmailer.php");
?>
 
<?php

class Maillerform
{
	private $fm;

	public	function __construct()
	{
		$this->fm   = new Format();
	}

	public function formGonder($data)
	{
		$ad   	   =  $this->fm->sqlonleme($this->fm->validation($data['ad']));
		$telefon   =  $this->fm->sqlonleme($this->fm->validation($data['telefon']));
		$nemail    =  $this->fm->sqlonleme($this->fm->validation($data['nemail']));
		$mesaj 	   =  $this->fm->sqlonleme($this->fm->validation($data['mesaj']));

		$mesaj     =  $this->fm->textKontrolCatering($mesaj);
		$msg = "";

		if ($ad == "" || $telefon == "" || $nemail == "" || $mesaj == "") {
			$msg = "<span class='error' style='color:white; font-size:16px;'>Lütfen Alanları Doldurunuz!</span>";
			return $msg;
		} elseif (
			!$this->fm->sqlonlemeforCatering($ad) || !$this->fm->sqlonlemeforCatering($telefon)
			|| !$this->fm->sqlonlemeforCatering($nemail) || !$this->fm->sqlonlemeforCatering($mesaj)
		) {
		} elseif (!$this->fm->MailKontrolEt($nemail)) {
			header("Location:404.php");
		} elseif ($this->fm->telefonKontrolEt($telefon) != true) {
			header("Location:404.php");
		} elseif ($this->fm->textKontrolEtOzel($ad) != true) {
			header("Location:404.php");
		} elseif ($this->fm->textKontrolEt($ad) != true) {
			header("Location:404.php");
		} elseif (!$mesaj) {
			header("Location:404.php");
		} else {



			//Form bilgilerini Dosyaya Yazdırmak İçin

			$form = $ad . "<br>" . $telefon . "<br>" . $nemail . "<br>" . $mesaj;
			$dt = "form.php";
			$dosya = fopen($dt, "a");

			if ($dosya) {
				echo "<br>";
				//echo "Dosya var!";
				//echo "<br>";

				//$formyeni=str_replace("<br>","\n",$form);
				//echo "\n";
				$giris = "*Form Bilgisi\n";
				fwrite($dosya, $giris);
				$sonuclar = explode("<br>", $form);
				foreach ($sonuclar as $indis => $formyeni) {
					$yazilacak = $indis . ". " . $formyeni . "\n";
					echo "\n";

					fwrite($dosya, $yazilacak);
				}
				fwrite($dosya, "\n********************\n");

				fclose($dosya);
				$msg = "<span class='success' style='color:#1c123d; font-size:16px;'>Sayın <ad style='color:white; text-transform: capitalize;'>".$ad.
				",</ad><br> Mesaj Gönderdiğiniz İçin Teşekkür Ederiz...</span> ";
				return $msg;
			   
			}
			else {
			   $msg = "<span class='error' style='color:red; font-size:16px;'>Mesajınız Gonderilmedi!</span> ";
			  return $msg; // return message 
			 }
		}
	}

	public function MaileGonder($data)
	{
		$ad   	  =  $this->fm->sqlonleme($this->fm->validation($data['ad']));
		$telefon  =  $this->fm->sqlonleme($this->fm->validation($data['telefon']));
		$nemail   =  $this->fm->sqlonleme($this->fm->validation($data['nemail']));
		$mesaj 	  =  $this->fm->sqlonleme($this->fm->validation($data['mesaj']));

		$ad 	  =  stripslashes($ad);
		$telefon  =  stripslashes($telefon);
		$nemail   =  stripslashes($nemail);
		$mesaj    =  stripslashes($mesaj);
		$mesaj    =  $this->fm->textKontrolCatering($mesaj);
		$msg = "";


		if ($ad == ""  || $telefon == "" || $nemail == "" || $mesaj == "") {
			$msg = "<span class='error' style='color:white; font-size:16px;'>Lütfen Alanları Doldurunuz!</span>";
			return $msg;
		} elseif (
			!$this->fm->sqlonlemeforCatering($ad) || !$this->fm->sqlonlemeforCatering($telefon)
			|| !$this->fm->sqlonlemeforCatering($nemail) || !$this->fm->sqlonlemeforCatering($mesaj)
		) {
		} elseif (!$this->fm->MailKontrolEt($nemail)) {
			header("Location:404.php");
		} elseif ($this->fm->telefonKontrolEt($telefon) != true) {
			header("Location:404.php");
		} elseif ($this->fm->textKontrolEtOzel($ad) != true) {
			header("Location:404.php");
		} elseif ($this->fm->textKontrolEt($ad) != true) {
			header("Location:404.php");
		} elseif (!$mesaj) {
			header("Location:404.php");
		} else {






			//Send Email
			/*
      	 ini_set('SMTP', 'smtp.yourisp.com');
 	  	 ini_set("smtp_port","25");
 	  	 ini_set('sendmail_from', 'example@YourDomain.com');
         ini_set( 'display_errors', 1 );
         error_reporting( E_ALL );
         $konu="";

        

	      $mail = new PHPMailer();
	    
	      $mail->IsSMTP();                                   // send via SMTP
	      $mail->Host     = "mail.a.com"; // SMTP servers
	      $mail->SMTPAuth = true;     // turn on SMTP authentication
	      $mail->Username = "info@a.com";  // SMTP username
	      $mail->Password = ""; // SMTP password
	      $mail->Port     = 587; 
	      $mail->From     = $email; // smtp kullanýcý adýnýz ile ayný olmalý
	      $mail->Fromname = $ad;
	      $mail->AddAddress("a@hotmail.com","Ad Soyad");
	      $mail->Subject  =  $konu;
	      $mail->Body     =  implode("    ",$_POST);
	      
	      
	      if(!$mail->Send())
	      {
	      	//Sunucuya yüklenince yorum satırları açılacak!!!!!
	      	
	        // $msg = "Mesaj Gönderilemedi <p>";
	       //  $msg .= "Mailer Error: " . $mail->ErrorInfo;
	        // return $msg;
	       //  exit();
	      }
	      else{
	      //$msg= '<renk style="color:#49b981; font-size:28px;">'. $ad.'</renk> Bizimle iletişime geçtiğiniz için teşekkürler. Çok yakında size geri döneceğiz.<br><br><br>';
	     // return $msg;
	      }*/
		}
	}
}
