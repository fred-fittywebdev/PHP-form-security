<?php $pageTitle = "Formulaires"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php echo $pageTitle; ?> </title>
</head>





<body>


    <h2>Formulaire de contact</h2>

    <form action="thanks.php" method="post">
        <fieldset>
            <legend>Contactez-nous.</legend>
            <div>
                <label for="nom">Nom :</label>
                <br>
                <input type="text" id="nom" name="user_lastname" placeholder="Votre nom" required>
                <br>
                <br>
            </div>
            <div>
                <label for="prenom">Prénom :</label>
                <br>
                <input type="text" id="prenom" name="user_name" placeholder="Votre prénom" required>
                <br>
                <br>
            </div>
            <div>
                <label for="courriel">Email :</label>
                <br>
                <input type="email" id="courriel" name="user_email" placeholder="Votre mail" required>
                <br>
                <br>
            </div>
            <div>
                <label for="telephone">Numéro de téléphone :</label>
                <br>
                <input type="tel" id="telephone" name="user_phone" placeholder="Votre téléphone." required>
                <br>
                <br>
            </div>
            <div>
                <label for="sujet">Sujet :</label>
                <select name="sujet" required>
                    <option value="">Objet de votre message</option>
                    <option value="commande">Commande</option>
                    <option value="livraison">Livraison</option>
                    <option value="retour">Retours</option>
                    <option value="reclamation">Réclamation</option>
                </select>
                <br>
                <br>
            </div>
            <div>
                <label for="message">Message :</label>
                <br>
                <textarea id="message" name="user_message" required></textarea>
                <br>
                <br>
            </div>
            <div class="button">
                <button type="submit">Envoyer votre message</button>
            </div>
        </fieldset>
    </form>
</body>


</html>
