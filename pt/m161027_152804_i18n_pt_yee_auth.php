<?php

use yeesoft\db\TranslatedMessagesMigration;

class m161027_152804_i18n_pt_yee_auth extends TranslatedMessagesMigration
{

    public function getLanguage()
    {
        return 'pt';
    }

    public function getCategory()
    {
        return 'yee/auth';
    }

    public function getTranslations()
    {
        return [
            'Are you sure you want to delete your profile picture?' => 'Você realmente quer apagar a imagem do seu perfil?',
            'Are you sure you want to unlink this authorization?' => 'Você realmente quer apagar essa autorização?',
            'Authentication error occurred.' => 'Erro de autenticação.',
            'Authorization' => 'Autorização',
            'Authorized Services' => 'Serviços Autorizados',
            'Captcha' => 'Proteção',
            'Change profile picture' => 'Alterar a imagem do perfil',
            'Check your E-mail for further instructions' => 'Verifique o seu email para obter mais instruções',
            'Check your e-mail {email} for instructions to activate account' => 'Verifique o seu email {email} para obter mais instruções sobre como ativar sua conta',
            'Click to connect with service' => 'Clique para autorizar-se com o serviço',
            'Click to unlink service' => 'Clique para desconectar-se do serviço',
            'Confirm E-mail' => 'Confirme seu email',
            'Confirm' => 'Confirmar',
            'Could not send confirmation email' => 'Não foi possível enviar confirmação por email',
            'Current password' => 'Palavra-passe atual',
            'E-mail confirmation for' => 'Confirmação do endereço de email para',
            'E-mail confirmed' => 'Email confirmado',
            'E-mail is invalid' => 'Email inválido',
            'E-mail with activation link has been sent to <b>{email}</b>. This link will expire in {minutes} min.' => 'A carta, com hiperligação para ativação tinha sido enviada no email {email}. Esta hiperligação estará ativa durante {minutes} min.',
            'E-mail' => 'Email',
            'Forgot password?' => 'Esqueceu palavra-passe?',
            'Incorrect username or password' => 'Nome de utilizador ou palavra-passe errado',
            'Login has been taken' => 'Nome de utilizador ocupado',
            'Login' => 'Nome de utilizador ',
            'Logout' => 'Sair',
            'Non Authorized Services' => 'Serviços não autorizados',
            'Password has been updated' => 'Palavra-passe atualizada com sucesso',
            'Password recovery' => 'Recuperação de palavra-passe',
            'Password reset for' => 'Recuperação de palavra-passe para',
            'Password' => 'ПаPalavra-passeоль',
            'Registration - confirm your e-mail' => 'Inscrição - Confirme o endereço de email',
            'Registration' => 'Inscrição',
            'Remember me' => 'Lembrar',
            'Remove profile picture' => 'Remover a imagem do perfil',
            'Repeat password' => 'Repita palavra-passe',
            'Reset Password' => 'Repor palavra-passe',
            'Reset' => 'Repor',
            'Save Profile' => 'Guardar Perfil',
            'Save profile picture' => 'Guardar imagem do perfil',
            'Set Password' => 'Definir Palavra-passe',
            'Set Username' => 'Definir o nome de utilizador',
            'Signup' => 'Inscrição',
            'This E-mail already exists' => 'Este endereço de email já ocupado',
            'Token not found. It may be expired' => 'Hiperligação inválida. Pode ser obsoleta',
            'Token not found. It may be expired. Try reset password once more' => 'Hiperligação inválida. Pode ser obsoleta. Tente redefinir palavra-passe novamente',
            'Too many attempts' => 'Tentativas demais',
            'Unable to send message for email provided' => 'Não foi possível enviar a mensagem para email',
            'Update Password' => 'Mudar palavra-passe',
            'User Profile' => 'Perfil de utilizador',
            "User with the same email as in {client} account already exists but isn't linked to it. Login using email first to link it." => 'Utilizador com o mesmo email como em conta {client} já existe. Entre via email e vincule sua conta.',
            'The username should contain only Latin letters, numbers and the following characters: "-" and "_".' => 'Nome de usuário só podem conter letras, números e símbolos "-" e "_".',
            'Username contains not allowed characters or words.' => 'Nome de usuário contém caracteres ou palavras não permitidos.',
            'Wrong password' => 'Palavra-passe incorreta',
            'You could not login from this IP' => 'Você não pode entrar deste endereço IP',
        ];
    }
}