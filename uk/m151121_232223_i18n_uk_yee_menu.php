<?php

use yeesoft\db\TranslatedMessagesMigration;

class m151121_232223_i18n_uk_yee_menu extends TranslatedMessagesMigration
{

    public function getLanguage()
    {
        return 'uk';
    }

    public function getCategory()
    {
        return 'yee/menu';
    }

    public function getTranslations()
    {
        return [
            'Menu' => 'Меню',
            'Menus' => 'Меню',
            'Link ID can only contain lowercase alphanumeric characters, underscores and dashes.' => 'ID посилання може містити тільки малі літери, цифри, підкреслення і тире.',
            'Parent Link' => 'Батьківське Посилання',
            'Always Visible' => 'Завжди Видимий',
            'No Parent' => 'Немає Батьківського Посилання',
            'Create Menu Link' => 'Створити Поcилання',
            'Update Menu Link' => 'Оновити Поcилання',
            'Menu Links' => 'Поcилання',
            'Add New Menu' => 'Додати Меню',
            'Add New Link' => 'Додати Поcилання',
            'An error occurred during saving menu!' => 'Виникла помилка під час збереження меню!',
            'The changes have been saved.' => 'Зміни були успішно збережені.',
            'Please, select menu to view menu links...' => 'Будь ласка, виберіть меню, щоб переглянути посилання...',
            'Selected menu doesn\'t contain any link. Click "Add New Link" to create a link for this menu.' => 'Вибране меню не містить жодного посилання. Натисніть кнопку "Додати Поcилання", щоб створити нове посилання для цього меню.',
        ];
    }
}