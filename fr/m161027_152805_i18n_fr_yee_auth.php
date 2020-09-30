<?php

use yeesoft\db\TranslatedMessagesMigration;

class m161027_152805_i18n_fr_yee_auth extends TranslatedMessagesMigration
{

    public function getLanguage()
    {
        return 'fr';
    }

    public function getCategory()
    {
        return 'yee/auth';
    }

    public function getTranslations()
    {
        return [
            'Are you sure you want to delete your profile picture?' => 'Etes-vous sûr de vouloir supprimer l’image du profil?',
            'Are you sure you want to unlink this authorization?' => 'Etes-vous sûr de vouloir supprimer cette autorisation?',
            'Authentication error occurred.' => 'Erreur d’identification.',
            'Authorization' => 'Autorisation',
            'Authorized Services' => 'Services autorisés',
            'Captcha' => 'Protection',
            'Change profile picture' => 'Changer l’image du profil',
            'Check your E-mail for further instructions' => 'Vérifiez votre courrier électronique pour obtenir des instructions suivantes',
            'Check your e-mail {email} for instructions to activate account' => 'Vérifiez votre courrier électronique {email} pour obtenir des instructions suivantes pour activer votre compte ',
            'Click to connect with service' => 'Cliquez pour vous autoriser avec le service',
            'Click to unlink service' => 'Cliquez pour vous déconnecter du service',
            'Confirm E-mail' => 'Confirmez votre courrier électronique ',
            'Confirm' => 'Confirmer',
            'Could not send confirmation email' => 'Impossible d’envoyer la confirmation à l’adresse e-mail',
            'Current password' => 'Mot de passe actuel',
            'E-mail confirmation for' => 'Confirmation de l’adresse du courrier électronique pour',
            'E-mail confirmed' => 'Courrier électronique confirmé ',
            'E-mail is invalid' => 'Courrier électronique invalide',
            'E-mail with activation link has been sent to <b>{email}</b>. This link will expire in {minutes} min.' => 'La lettre avec un lien pour l’activation a été envoyée à votre e-mail {email}. Ce lien sera actif pendant {minutes} minutes.',
            'E-mail' => 'E-mail',
            'Forgot password?' => 'Mot de passe oublié?',
            'Incorrect username or password' => 'Nom d’utilisateur ou mot de passe incorrect',
            'Login has been taken' => 'Nom d’utilisateur déjà existant',
            'Login' => 'Nom d’utilisateur',
            'Logout' => 'Quitter',
            'Non Authorized Services' => 'Services non autorisés ',
            'Password has been updated' => 'Mot de passe mis à jour avec succès',
            'Password recovery' => 'Récupération de mot de passe',
            'Password reset for' => 'Récupération de mot de passe pour {user}',
            'Password' => 'Mot de passe',
            'Registration - confirm your e-mail' => 'Inscription – Confirmez votre courrier électronique',
            'Registration' => 'Inscription',
            'Remember me' => 'Mémoriser',
            'Remove profile picture' => 'Supprimer l’image du profil',
            'Repeat password' => 'Répétez le mot de passe',
            'Reset Password' => 'Réinitialiser le mot de passe',
            'Reset' => 'Réinitialiser',
            'Save Profile' => 'Sauver le profil',
            'Save profile picture' => 'Sauver l’image du profil',
            'Set Password' => 'Insérer le Mot de passe',
            'Set Username' => 'Insérer le nom d’utilisateur',
            'Signup' => 'Inscription',
            'This E-mail already exists' => 'Cet e-mail existe déjà',
            'Token not found. It may be expired' => 'Lien invalide. Il n’est plus actuel.',
            'Token not found. It may be expired. Try reset password once more' => 'Lien invalide. Il n’est plus actuel. Essayez de réinitialiser le mot de passe encore une fois.',
            'Too many attempts' => 'Trop de tentatives ',
            'Unable to send message for email provided' => 'Impossible d’envoyer le message à l’adresse du courrier électronique',
            'Update Password' => 'Changer le mot de passe',
            'User Profile' => 'Profil d’Utilisateur ',
            "User with the same email as in {client} account already exists but isn't linked to it. Login using email first to link it." => 'L’utilisateur avec le même courrier électronique que dans le compte {client} existe déjà. Entrez à l’aide du courrier électronique et ajoutez votre compte.',
            'The username should contain only Latin letters, numbers and the following characters: "-" and "_".' => 'Nom d’utilisateur ne peut contenir que des lettres, des chiffres et des symboles "-" et "_".',
            'Username contains not allowed characters or words.' => 'Nom d’utilisateur ne contient pas autorisés caractères ou des mots',
            'Wrong password' => 'Mot de passe incorrect ',
            'You could not login from this IP' => 'Vous ne pouvez pas entrer à partir de cette adresse IP',
        ];
    }
}