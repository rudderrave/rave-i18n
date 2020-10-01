<?php

use ravesoft\db\TranslatedMessagesMigration;

class m151228_234401_i18n_es_rave_seo extends TranslatedMessagesMigration
{

    public function getLanguage()
    {
        return 'es';
    }

    public function getCategory()
    {
        return 'rave/seo';
    }

    public function getTranslations()
    {
        return [
            'Create SEO Record' => 'Crear un registro SEO',
            'Follow' => 'Seguir',
            'Index' => 'Indexar',
            'Keywords' => 'Palabras claves',
            'SEO' => 'SEO',
            'Search Engine Optimization' => 'Optimización para motores de búsqueda',
            'Update SEO Record' => 'Actualizar registro SEO',
        ];
    }
}
