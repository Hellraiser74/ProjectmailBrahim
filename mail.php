<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="transfer_css2.css">
    <title>Document</title>
</head>


<body>
<br><br>

    <div class="cadre"><div class="montitre">
      
      <?php
require_once './vendor/autoload.php';

/* foreach($_FILES as $file){
  /*echo "Fichier à télécharger : " .$file[].
    "<br />";
var_dump($file);
}*/





  move_uploaded_file(
    $_FILES["file"]["tmp_name"],
    "C:\wamp64\www\depot/" . $_FILES["file"]["name"]
  );
 

  
  $email=$_POST['courriel'];
  
  if(filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo "L'adresse mail est valide<br>";
  
  echo $_FILES["file"]["name"]."<br>";
  var_dump($_FILES);


  


  $message= $_POST['user_message'];
  $lienFichier="http://localhost/projet_mail/downloadFile.php?fichier=". $_FILES["file"]["name"];
  $corpsEmail= $message."\n\nLien vers les fichiers:\n".$lienFichier;

// Create the Transport
$transport = (new Swift_SmtpTransport('smtp.gmail.com', 465, 'ssl'))
  ->setUsername('')
  ->setPassword('')
;

// Create the Mailer using your created Transport
$mailer = new Swift_Mailer($transport);

// Create a message
$message = (new Swift_Message('Mon mailer'))
  ->setFrom([''])
  ->setTo([$email, $email => 'Himbra'])
  ->setBody($corpsEmail)
  ;
  
$result = $mailer->send($message);

}

else

{
  echo "L'adresse e-mail n'est pas valide<br>";
  echo "<a href=\"http://localhost/projet_mail/index.php\" style=\"color:whitesmoke;\">Retour</a>";
}

?>


  </div>
</body>

</html>
