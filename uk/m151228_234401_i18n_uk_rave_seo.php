<?php

use ravesoft\db\TranslatedMessagesMigration;

class m151228_234401_i18n_uk_rave_seo extends TranslatedMessagesMigration
{

    public function getLanguage()
    {
        return 'uk';
    }

    public function getCategory()
    {
        return 'rave/seo';
    }

    public function getTranslations()
    {
        return [
            'Create SEO Record' => 'Створити SEO запис',
            'Follow' => 'Слідувати посиланням',
            'Index' => 'Індексувати',
            'Keywords' => 'Ключові слова',
            'SEO' => 'SEO',
            'Search Engine Optimization' => 'Пошукова оптимізація',
            'Update SEO Record' => 'Оновити SEO запис',
        ];
    }
}