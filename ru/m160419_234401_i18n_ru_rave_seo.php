<?php

use ravesoft\db\TranslatedMessagesMigration;

class m160419_234401_i18n_ru_rave_seo extends TranslatedMessagesMigration
{

    public function getLanguage()
    {
        return 'ru';
    }

    public function getCategory()
    {
        return 'rave/seo';
    }

    public function getTranslations()
    {
        return [
            'Create SEO Record' => 'Создать SEO запись',
            'Follow' => 'Следовать ссылке',
            'Index' => 'Индексировать',
            'Keywords' => 'Ключевые слова',
            'SEO' => 'SEO',
            'Search Engine Optimization' => 'Поисковая оптимизаци',
            'Update SEO Record' => 'Обновить SEO запись',
        ];

    }
}