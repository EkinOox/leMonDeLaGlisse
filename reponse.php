<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Votre Formulaire</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" />
    <link rel="stylesheet" href="styles/connexion.css">
    <link rel="icon" type="image/x-icon" href="assets/wave.ico" />
</head>

<body>
    <h1><?php echo "Bonjour M." . $_POST['nom'] ?></h1>
    <hr>
    <form action="vetement_femme.html" method="post">

        <?php
        echo "Vous êtes le bienvenue sur notre boutique et dans la communauté. <br>";
        echo "Vous avez " . $_POST['nombre'] . " ans et vous pratiquez du " . $_POST['interest'] . ".";
        echo "Votre adresse mail est la suivante : " . $_POST['adresse'] . ". <br>";
        echo "Vous habitez dans le : " . $_POST['cp'] . " et dans la ville de " . $_POST["ville"] . ". <br>";
        echo "Si une des ces informations est fausse, nous vous invitons à recommencer le formulaire sinon nous vous invitons à continuer ! <br>";
        ?>
        <a href="kyllian.diochon.kd@gmail.com"><input type="submit" name="transférer" value="Continuer"></a>

        <?php
        $Name = $_POST['nom']; //senders name
        $email = $_POST['adresse']; //senders e-mail adress
        $recipient = "kyllian.diochon.kd@gmail.com"; //recipient
        $mail_body = $_POST['message']; //mail body
        $subject = "Mail d'un particulier"; //subject
        $header = "From: " . $Name . " <" . $email . ">\r\n"; //optional headerfields

        $retour = mail($recipient, $subject, $mail_body, $header);
        if ($retour) {
            echo '<p>Votre message a bien été envoyé.</p>';
        } //mail command :)
        ?>

    </form>

</body>

</html>