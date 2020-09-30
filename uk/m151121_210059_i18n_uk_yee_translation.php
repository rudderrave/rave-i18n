<?php

use yeesoft\db\TranslatedMessagesMigration;

class m151121_210059_i18n_uk_yee_translation extends TranslatedMessagesMigration
{

    public function getLanguage()
    {
        return 'uk';
    }

    public function getCategory()
    {
        return 'yee/translation';
    }

    public function getTranslations()
    {
        return [
            'Add New Source Message' => 'Додати Нове Повідомлення',
            'Category' => 'Категорія',
            'Create Message Source' => 'Створити Повідомлення',
            'Create New Category' => 'Створити Нову Категорію',
            'Immutable' => 'Незмінний',
            'Message Translation' => 'Переклад Повідомлень',
            'New Category Name' => 'Назва Нової Категорії',
            'Please, select message group and language to view translations...' => 'Будь ласка, виберіть групу повідомлень та мову для відображення перекладів...',
            'Source Message' => 'Повідомлення',
            'Update Message Source' => 'Оновити Повідомлення',
            '{n, plural, =1{1 message} other{# messages}}' => '{n, plural, =1{1 запис} other{# записів}}',
        ];
    }

}