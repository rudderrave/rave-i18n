<?php

use yeesoft\db\TranslatedMessagesMigration;

class m160419_210059_i18n_ru_yee_translation extends TranslatedMessagesMigration
{

    public function getLanguage()
    {
        return 'ru';
    }

    public function getCategory()
    {
        return 'yee/translation';
    }

    public function getTranslations()
    {
        return [
            'Add New Source Message' => 'Добавить Источник Сообщения',
            'Category' => 'Категория',
            'Create Message Source' => 'Создать Сообщение',
            'Create New Category' => 'Создать Новую Категори',
            'Immutable' => 'Неизменный',
            'Message Translation' => 'Перевод Сообщений',
            'New Category Name' => 'Название Новой Категории',
            'Please, select message group and language to view translations...' => 'Выберите группу сообщений и язык для отображения переводов...',
            'Source Message' => 'Сообщение',
            'Update Message Source' => 'Обновить Сообщение',
            '{n, plural, =1{1 message} other{# messages}}' => '{n, plural, =1{1 запись} other{# записей}}',
        ];
    }

}