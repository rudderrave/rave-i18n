<?php

use ravesoft\db\TranslatedMessagesMigration;

class m151121_235120_i18n_es_rave_settings extends TranslatedMessagesMigration
{

    public function getLanguage()
    {
        return 'es';
    }

    public function getCategory()
    {
        return 'rave/settings';
    }

    public function getTranslations()
    {
        return [
            'General Settings' => 'Configuración géneral',
            'Reading Settings' => 'Configuraciones de lectura',
            'Site Title' => 'Título del sitio',
            'Site Description' => 'Descripción del sitio',
            'Admin Email' => 'E-mail del administrador',
            'Timezone' => 'Zona horaria',
            'Date Format' => 'Formato de fecha',
            'Time Format' => 'Formato de hora',
            'Page Size' => 'Támano de la página',
        ];
    }
}
