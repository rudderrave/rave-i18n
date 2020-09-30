<?php

use yeesoft\db\TranslatedMessagesMigration;

class m161027_152803_i18n_de_yee_auth extends TranslatedMessagesMigration
{

    public function getLanguage()
    {
        return 'de';
    }

    public function getCategory()
    {
        return 'yee/auth';
    }

    public function getTranslations()
    {
        return [
            'Are you sure you want to delete your profile picture?' => 'Wollen Sie wirklich die Abbildung des Profils entfernen?',
            'Are you sure you want to unlink this authorization?' => 'Wollen Sie wirklich diese Zugangsgenehmigung entfernen?',
            'Authentication error occurred.' => 'Fehler der Personalkontrolle.',
            'Authorization' => 'Authorisierung',
            'Authorized Services' => 'Authorisierten Dienste',
            'Captcha' => 'Schutz',
            'Change profile picture' => 'Eine Abbildung des Profils ändern',
            'Check your E-mail for further instructions' => 'Überprüfen Sie Ihre E-Mail-Adresse zum Erhalt weiterer Anweisungen',
            'Check your e-mail {email} for instructions to activate account' => 'Überprüfen Sie Ihre E-Mail-Adresse {email} zum Erhalt weiterer Anweisungen bezüglich Aktivierung des Benutzerkontos',
            'Click to connect with service' => 'Klicken Sie, um den Bedienungsdienst zu autorisieren ',
            'Click to unlink service' => 'Klicken Sie, um den Bedienungsdienst abzubrechen',
            'Confirm E-mail' => 'Bestätigen Sie Ihre E-Mail-Adresse',
            'Confirm' => 'Bestätigen',
            'Could not send confirmation email' => 'Die Absendung der Bestätigung auf Ihre E-Mail-Adresse ist misslungen ',
            'Current password' => 'Das laufende Passwort',
            'E-mail confirmation for' => 'Die Bestätigung der E-Mail-Adresse für',
            'E-mail confirmed' => 'Ihre E-Mail-Adresse ist bestätigt',
            'E-mail is invalid' => 'Ihre E-Mail-Adresse ist ungültig',
            'E-mail with activation link has been sent to <b>{email}</b>. This link will expire in {minutes} min.' => 'Eine E-Mail mit einer Aktivierungsverknüpfung ist auf die E-Mail-Adresse abgesandt {email}. Die Verknüpfung ist binnen {minutes} Minuten gültig.',
            'E-mail' => 'E-mail',
            'Forgot password?' => 'Haben Sie Ihr Passwort vergessen?',
            'Incorrect username or password' => 'Der unrichtige Benutzername bzw. Passwort',
            'Login has been taken' => 'Dieser Benutzername ist gegeben',
            'Login' => 'Benutzername',
            'Logout' => 'Abmelden',
            'Non Authorized Services' => 'Die unautorisierten Bedienungsdienste',
            'Password has been updated' => 'Das Passwort ist erfolgreich erneuert',
            'Password recovery' => 'Wiederherstellung eines Passwortes',
            'Password reset for' => 'Wiederherstellung eines Passwortes für ',
            'Password' => 'Das Passwort',
            'Registration - confirm your e-mail' => 'Die Anmeldung – Bestätigen Sie Ihre E-Mail-Adresse',
            'Registration' => 'Die Anmeldung',
            'Remember me' => 'Meine Benutzerdaten speichern',
            'Remove profile picture' => 'Eine Abbildung des Profils entfernen',
            'Repeat password' => 'Wiederholen Sie das Passwort',
            'Reset Password' => 'Das Passwort löschen',
            'Reset' => 'Löschen',
            'Save Profile' => 'Das Benutzerprofil speichern',
            'Save profile picture' => 'Das Bild des Profils speichern',
            'Set Password' => 'Ein Passwort festsetzen',
            'Set Username' => 'Einen Benutzernamen festsetzen',
            'Signup' => 'Die Anmeldung',
            'This E-mail already exists' => 'Diese E-Mail-Adresse ist schon gegeben',
            'Token not found. It may be expired' => 'Die Verknüpfung ist ungültig. Sie kann veraltet sein.',
            'Token not found. It may be expired. Try reset password once more' => 'Die Verknüpfung ist ungültig. Sie kann veraltet sein. Versuchen Sie noch mal Ihr Passwort erneut zu herstellen.',
            'Too many attempts' => 'Es geben zu viel Versuche',
            'Unable to send message for email provided' => 'Die Absendung einer Mitteilung auf Ihre E-Mail-Adresse ist misslungen',
            'Update Password' => 'Das Passwort ändern',
            'User Profile' => 'Benutzerprofil',
            "User with the same email as in {client} account already exists but isn't linked to it. Login using email first to link it." => 'Ein Benutzer mit dieselber E-Mail-Adresse wie im {client} Konto existiert schon. Logen Sie bitte mittels Ihrer E-Mail-Adresse ein und knüpfen Sie bitte Ihr Konto.',
            'The username should contain only Latin letters, numbers and the following characters: "-" and "_".' => 'Benutzername darf nur Buchstaben, Zahlen und Symbole enthalten "-" und "_".',
            'Username contains not allowed characters or words.' => 'Benutzername enthält nicht erlaubte Zeichen oder Wörter.',
            'Wrong password' => 'Das falsche Passwort',
            'You could not login from this IP' => 'Sie dürfen nicht mit dieser IP-Adresse einzulogen.',
        ];
    }
}