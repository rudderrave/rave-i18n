<?php

use yeesoft\db\TranslatedMessagesMigration;

class m151126_081214_i18n_uk_yee_auth extends TranslatedMessagesMigration
{

    public function getLanguage()
    {
        return 'uk';
    }

    public function getCategory()
    {
        return 'yee/auth';
    }

    public function getTranslations()
    {
        return [
            'Are you sure you want to delete your profile picture?' => 'Ви дійсно хочете видалити зображення профілю?',
            'Are you sure you want to unlink this authorization?' => 'Ви дійсно хочете видалити цю авторизацію?',
            'Authentication error occurred.' => 'Помилка аутентифікації.',
            'Authorization' => 'Авторизація',
            'Authorized Services' => 'Авторизовані Сервіси',
            'Captcha' => 'Захист',
            'Change profile picture' => 'Змінити зображення профілю',
            'Check your E-mail for further instructions' => 'Перевірте вашу електронну пошту для отримання подальших інструкцій',
            'Check your e-mail {email} for instructions to activate account' => 'Перевірте вашу електронну пошту {email} для подальших інструкцій щодо активації облікового запису',
            'Click to connect with service' => 'Натисніть, щоб авторизуватись з сервісом',
            'Click to unlink service' => 'Натисніть, щоб від\'єднатись від сервісу',
            'Confirm E-mail' => 'Підтвердіть електронну пошту',
            'Confirm' => 'Підтвердити',
            'Could not send confirmation email' => 'Не вдалося відправити підтвердження по електронній пошті',
            'Current password' => 'Поточний пароль',
            'E-mail confirmation for' => 'Підтвердження адреси електронної пошти для',
            'E-mail confirmed' => 'Електронна пошта підтверджена',
            'E-mail is invalid' => 'Недійсна електронна пошта',
            'E-mail with activation link has been sent to <b>{email}</b>. This link will expire in {minutes} min.' => 'Лист, з посиланням для активації, був відправлений на e-mail <b>{email}</b>. Це посилання буде активним протягом {minutes} хв.',
            'E-mail' => 'E-mail',
            'Forgot password?' => 'Забули пароль?',
            'Incorrect username or password' => 'Неправильне ім\'я користувача або пароль',
            'Login has been taken' => 'Логін зайнятий',
            'Login' => 'Логін',
            'Logout' => 'Вийти',
            'Non Authorized Services' => 'Неавторизовані Сервіси',
            'Password has been updated' => 'Пароль успішно оновлений',
            'Password recovery' => 'Відновлення пароля',
            'Password reset for' => 'Відновлення пароля для',
            'Password' => 'Пароль',
            'Registration - confirm your e-mail' => 'Реєстрація - Підтвердіть адресу електронної пошти',
            'Registration' => 'Реєстрація',
            'Remember me' => 'Запам\'ятати мене',
            'Remove profile picture' => 'Видалити зображення профілю',
            'Repeat password' => 'Повторіть пароль',
            'Reset Password' => 'Скинути пароль',
            'Reset' => 'Скинути',
            'Save Profile' => 'Зберегти Профіль',
            'Save profile picture' => 'Зберегти зображення профілю',
            'Set Password' => 'Встановити Пароль',
            'Set Username' => 'Встановити Ім\'я Користувача',
            'Signup' => 'Реєстрація',
            'This E-mail already exists' => 'Цей e-mail вже існує',
            'Token not found. It may be expired' => 'Посилання не дійсне. Воно може бути застарлим',
            'Token not found. It may be expired. Try reset password once more' => 'Посилання не дійсне. Воно може бути застарлим. Спробуйте відновити пароль ще раз',
            'Too many attempts' => 'Занадто багато спроб',
            'Unable to send message for email provided' => 'Не вдалося відправити повідомлення на електронну пошту',
            'Update Password' => 'Змінити пароль',
            'User Profile' => 'Профіль Користувача',
            "User with the same email as in {client} account already exists but isn't linked to it. Login using email first to link it." => 'Користувач з такою ж електронною поштою як і в акаунті {client} вже існує. Ввійдіть за допомогою електронної пошти, та прив\'яжіть ваш акаунт.',
            'The username should contain only Latin letters, numbers and the following characters: "-" and "_".' => 'Логін може містити лише латинські літери, цифри та символи "-" і "_".',
            'Username contains not allowed characters or words.' => 'Ім\'я користувача містить недозволені символи або слова.',
            'Wrong password' => 'Неправильний пароль',
            'You could not login from this IP' => 'Ви не можете увійти з цієї IP адреси',
        ];
    }
}