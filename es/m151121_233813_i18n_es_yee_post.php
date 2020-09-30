<?php

use yeesoft\db\TranslatedMessagesMigration;

class m151121_233813_i18n_es_yee_post extends TranslatedMessagesMigration
{

    public function getLanguage()
    {
        return 'es';
    }

    public function getCategory()
    {
        return 'yee/post';
    }

    public function getTranslations()
    {
        return [
            'No posts found. ' => 'No se han encontrado artículos.',
            'Post' => 'Artículo',
            'Posted in' => 'Publicado en',
            'Posts Activity' => 'Actividades de los artículos',
            'Posts' => 'Artículos',
            'Thumbnail' => 'Miniatura',
        ];
    }
}
