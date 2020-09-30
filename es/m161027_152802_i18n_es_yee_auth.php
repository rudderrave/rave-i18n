<?php

use yeesoft\db\TranslatedMessagesMigration;

class m161027_152802_i18n_es_yee_auth extends TranslatedMessagesMigration
{

    public function getLanguage()
    {
        return 'es';
    }

    public function getCategory()
    {
        return 'yee/auth';
    }

    public function getTranslations()
    {
        return [
            'Are you sure you want to delete your profile picture?' => '¿Está seguro de querer eliminar la foto del perfil?',
            'Are you sure you want to unlink this authorization?' => '¿Está seguro de querer eliminar esta autorización?',
            'Authentication error occurred.' => 'Error de autenticación.',
            'Authorization' => 'Autorización',
            'Authorized Services' => 'Servicios Autorizados',
            'Captcha' => 'Protección',
            'Change profile picture' => 'Cambiar la foto de perfil',
            'Check your E-mail for further instructions' => 'Comprueba su correo electrónico para obtener más instrucciones',
            'Check your e-mail {email} for instructions to activate account' => 'Comprueba su correo electrónico {email} más instrucciones sobre la activación de su cuenta de usuario',
            'Click to connect with service' => 'Pulse para conectarse con el servicio',
            'Click to unlink service' => 'Pulse para desconectarse del servicio',
            'Confirm E-mail' => 'Confirme su correo electrónico',
            'Confirm' => 'Confirmar',
            'Could not send confirmation email' => 'No se ha podido enviar la confirmación por correo electrónico',
            'Current password' => 'Contraseña actual',
            'E-mail confirmation for' => 'Confirmación de correo electrónico para',
            'E-mail confirmed' => 'El correo electrónico está confirmado',
            'E-mail is invalid' => 'Correo electrónico no válido',
            'E-mail with activation link has been sent to <b>{email}</b>. This link will expire in {minutes} min.' => 'El mensaje con el enlace para la activación está enviado a su e-mail {email}. Este enlace estará activo durante {minutes} min.',
            'E-mail' => 'E-mail',
            'Forgot password?' => '¿Ha olvidado la contraseña?',
            'Incorrect username or password' => 'Usuario y/o contraseña incorrectos',
            'Login has been taken' => 'Nombre de usuario ocupado',
            'Login' => 'Nombre de usuario',
            'Logout' => 'Salir',
            'Non Authorized Services' => 'Servicios No autorizados',
            'Password has been updated' => 'Contraseña actualizada con éxito',
            'Password recovery' => 'Recuperación de contraseña',
            'Password reset for' => 'Recuperación de contraseña para {user}',
            'Password' => 'Contraseña',
            'Registration - confirm your e-mail' => 'Registro - Confirme la dirección de correo electrónico',
            'Registration' => 'Registro',
            'Remember me' => 'Recordarme',
            'Remove profile picture' => 'Eliminar imagen de perfil',
            'Repeat password' => 'Repita la contraseña',
            'Reset Password' => 'Reiniciar la contraseña',
            'Reset' => 'Reiniciar',
            'Save Profile' => 'Guardar Perfil',
            'Save profile picture' => 'Guardar la imagen de perfil',
            'Set Password' => 'Establecer Contraseña',
            'Set Username' => 'Establecer nombre de usuario',
            'Signup' => 'Registro',
            'This E-mail already exists' => 'Este e-mail ya está ocupado',
            'Token not found. It may be expired' => 'El enlace no es válido. Puede haber expirado',
            'Token not found. It may be expired. Try reset password once more' => 'El enlace no es válido. Puede haber expirado. Vuelva a intentar a recuperar la contraseña',
            'Too many attempts' => 'Demasiados intentos',
            'Unable to send message for email provided' => 'No se ha podido enviar el mensaje al correo',
            'Update Password' => 'Sustituir la contraseña',
            'User Profile' => 'Perfil de Usuario',
            "User with the same email as in {client} account already exists but isn't linked to it. Login using email first to link it." => 'Ya existe el usuario {client} con el mismo correo que en la cuenta. Entre mediante el correo electrónico y vincule su cuenta.',
            'The username should contain only Latin letters, numbers and the following characters: "-" and "_".' => 'Nombre de usuario sólo puede contener letras, números y símbolos "-" y "_".',
            'Username contains not allowed characters or words.' => 'Nombre de usuario contiene caracteres o palabras no permitidas.',
            'Wrong password' => 'Contraseña incorrecta',
            'You could not login from this IP' => 'No puede entrar de esta dirección IP',
        ];
    }
}
