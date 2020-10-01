<?php

use ravesoft\db\TranslatedMessagesMigration;

class m151121_233713_i18n_uk_rave_page extends TranslatedMessagesMigration
{

    public function getLanguage()
    {
        return 'uk';
    }

    public function getCategory()
    {
        return 'rave/page';
    }

    public function getTranslations()
    {
        return [
            'Page' => 'Сторінка',
            'Pages' => 'Сторінки',
            'Create Page' => 'Створити Сторінку',
        ];
    }
}