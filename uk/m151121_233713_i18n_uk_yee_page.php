<?php

use yeesoft\db\TranslatedMessagesMigration;

class m151121_233713_i18n_uk_yee_page extends TranslatedMessagesMigration
{

    public function getLanguage()
    {
        return 'uk';
    }

    public function getCategory()
    {
        return 'yee/page';
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