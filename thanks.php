<?php $pageTitle = "Merci !"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php echo $pageTitle; ?> </title>
</head>
<?php
$erreurs = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    foreach ($_POST as $inputName => $inputValue) {
        if (empty($inputValue)) {
            $erreurs = true;
        }
    };
    if (!filter_var($_POST["user_email"], FILTER_VALIDATE_EMAIL)) {
        $erreurs = true;
    }
};


?>

<body>

    <?php
    if ($erreurs) {
        echo "Il y a un problème avec votre formulaire, veuillez vérifier qu'aucun champ ne soit vide, ou que les données entrées sont correctes";
    } else {
    ?>
        <div>
            <p>
                Merci <?php echo $_POST["user_lastname"] ?> <?php echo $_POST["user_name"] ?> de nous avoir contacté à
                propos de <strong>
                    <?php echo $_POST["sujet"] ?></strong>.
            </p>
            <p>
                Un de nos conseiller vous contactera soit à l’adresse <em> <?php echo $_POST["user_email"] ?></em> ou par
                téléphone au <em>
                    <?php echo $_POST["user_phone"] ?></em> dans les plus
                brefs délais pour traiter votre demande :
            </p>

            <p>
                <?php echo $_POST["user_message"] ?>
            </p>


        </div>
    <?php
    }
    ?>
</body>

</html>
