<?php

use yeesoft\db\TranslatedMessagesMigration;

class m151121_233713_i18n_es_yee_page extends TranslatedMessagesMigration
{

    public function getLanguage()
    {
        return 'es';
    }

    public function getCategory()
    {
        return 'yee/page';
    }

    public function getTranslations()
    {
        return [
            'Page' => 'Página',
            'Pages' => 'Páginas',
            'Create Page' => 'Crear una página',
        ];
    }
}
