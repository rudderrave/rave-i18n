<?php

use ravesoft\db\TranslatedMessagesMigration;

class m151121_233813_i18n_uk_rave_post extends TranslatedMessagesMigration
{

    public function getLanguage()
    {
        return 'uk';
    }

    public function getCategory()
    {
        return 'rave/post';
    }

    public function getTranslations()
    {
        return [
            'No posts found. ' => 'Записи не знайдені.',
            'Post' => 'Запис',
            'Posted in' => 'Опубліковано в категорії',
            'Posts Activity' => 'Активність Записів',
            'Posts' => 'Записи',
            'Thumbnail' => 'Ескіз',
        ];
    }
}