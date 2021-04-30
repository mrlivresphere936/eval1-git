<?php

$EmailFrom = $_POST['email']; 
$EmailTo = "j.coste305@laposte.net";
$Nom = $_POST['name']; 
$Email = $_POST['mail'];
$Message = $_POST['msg']; 
 
// validation
$validationOK=true;
if (!$validationOK) {
  echo "Error";
  exit;
}
 
// mise en form mail
$Body = "";
$Body .= "Nom: ";
$Body .= $Nom;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $Email;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $Message;
$Body .= "\n";
 
// envoi email 
$success = mail($EmailTo, $Body, "From: <$EmailFrom>");
	
// message success-error
if ($success){
  echo "Votre message à bien été envoyé.";
}
else{
  echo "Une erreur s'est produite à l'envoi de votre message.";
}

?>