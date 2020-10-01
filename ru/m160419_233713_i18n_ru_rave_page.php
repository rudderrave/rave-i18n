<?php

use ravesoft\db\TranslatedMessagesMigration;

class m160419_233713_i18n_ru_rave_page extends TranslatedMessagesMigration
{

    public function getLanguage()
    {
        return 'ru';
    }

    public function getCategory()
    {
        return 'rave/page';
    }

    public function getTranslations()
    {
        return [
            'Page' => 'Страница',
            'Pages' => 'Страницы',
            'Create Page' => 'Cоздать Страницу',
        ];
    }
}