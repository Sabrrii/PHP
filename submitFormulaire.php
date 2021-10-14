<!Doctype html>
<html>
    <head>
    <meta charset="utf-8">
    <link href="formulaire.css" rel="stylesheet">
    <title>Formulaire </title>
    </head>

    <body>
         <div>
            <h1>Nous Contacter</h1>
            <p>Nous serions ravis de vous entendre </p>
         </div>

        <section>
             <?php
                 echo 'Prénom: '.$_POST["Prénom"].'<br>';
                 echo 'Nom: '.$_POST["Nom"].'<br>';
                 echo 'email: '.$_POST["email"].'<br>';
                 echo 'commentaire:'.$_POST["comm"].'<br>';
            ?>
            <input type="submit" name="submit" value="Bonne info">
            <a href="http://127.0.0.1/test-php/Formulaire (1).html"><input type="submit" name="submit" value="Pas bonne info"></a>
        </section>

        
    </body>
</html>
