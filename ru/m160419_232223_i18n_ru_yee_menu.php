<?php

use yeesoft\db\TranslatedMessagesMigration;

class m160419_232223_i18n_ru_yee_menu extends TranslatedMessagesMigration
{

    public function getLanguage()
    {
        return 'ru';
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
            'Link ID can only contain lowercase alphanumeric characters, underscores and dashes.' => 'ID ссылки может содержать только строчные буквы, цифры, подчеркивание и тире.',
            'Parent Link' => 'Родительская Ссылка',
            'Always Visible' => 'Всегда Видимый',
            'No Parent' => 'Нет Родительской Ссылка',
            'Create Menu Link' => 'Создать Ссылку',
            'Update Menu Link' => 'Обновить Ссылка',
            'Menu Links' => 'Ссылки',
            'Add New Menu' => 'Добавить Меню',
            'Add New Link' => 'Добавить Ссылку',
            'An error occurred during saving menu!' => 'Ошибка при сохранении меню!',
            'The changes have been saved.' => 'Изменения были успешно сохранены.',
            'Please, select menu to view menu links...' => 'Пожалуйста, выберите меню для просмотра списка ссылок...',
            'Selected menu doesn\'t contain any link. Click "Add New Link" to create a link for this menu.' => 'Выбранное меню не содержит ни одной ссылки. Нажмите кнопку "Добавить Ссылку", чтобы создать новую ссылку для этого меню.',
        ];
    }
}