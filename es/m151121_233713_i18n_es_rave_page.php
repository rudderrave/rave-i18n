<?php

use ravesoft\db\TranslatedMessagesMigration;

class m151121_233713_i18n_es_rave_page extends TranslatedMessagesMigration
{

    public function getLanguage()
    {
        return 'es';
    }

    public function getCategory()
    {
        return 'rave/page';
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
