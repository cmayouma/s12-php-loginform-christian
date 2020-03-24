<?php
    // Définir la liste des utilisateurs
    $userData = [
        'toto@test.com' => '$2y$10$5.eeAIZzdNZg9LHdJHZwu.gGqhWm0bv0pR5uPjKKPCXrn4nzs/bdO', // BonjourLesGens
        'jeanpierre@test.com' => '$2y$10$5HFVyNsIeFZjbrC3ZL2ie.j3ADzBETVXGV.s7JiTlvuSJBp9fI3Yq', // JaimeLesFrites
        'michel@test.com' => '$2y$10$aBwaQf3wrZSGT5QItN1Nje6HhJx.b79aG79p0iGOG8ES4lTDUgKAm' // Abcd1234
    ];

    // Si l'e-mail et le mot de passe existent dans les données envoyées à la page
    if (isset($_POST['email']) && isset($_POST['password'])) {
        // Récupère les données du formulaire
        $email = $_POST['email'];
        $givenPassword = $_POST['password'];
        // Si l'adresse e-mail entrée par l'utilisateur existe dans les données
        if (isset($userData[$email])) {
            $hash = $userData[$email];  // => Mot de passe correspondant au nom d'utilisateur rentré dans le formulaire

            if (password_verify($givenPassword, $hash)) {
                echo 'Connexion réussie';
            } else {
                echo 'Connexion échouée';
            }
        } else {
            echo 'Nom d\'utilisateur inexistant';
        }
    }
?>


