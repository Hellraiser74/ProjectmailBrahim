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
            <h1>Download</h1>
        </div>

    <?php
    
    /*foreach($_FILES as $file){
        var_dump($file['tmp_name']);
        var_dump("http://localhost/depot/?fichier=". $_FILES["file"]["name"]);
        var_dump($_GET[fichier]);
      }
      var_dump($file['tmp_name']);
        var_dump("http://localhost/depot/?fichier=". $_FILES["file"]["name"]);*/

        $nom = $_GET['fichier'];
        
        echo "<a href=\"http://localhost/projet_mail/fonctionTele/?fichier=$nom\" style=\"color:whitesmoke;\">$nom</a>";


        

    
    ?>
    </div>
</body>

</html>