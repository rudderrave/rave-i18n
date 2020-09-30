<?php

use yii\db\Migration;

class m151122_144710_i18n_es_menu_setting extends Migration
{

    public function up()
    {
        $this->insert('{{%menu_link_lang}}', ['link_id' => 'settings', 'label' => 'Configuraciones', 'language' => 'es']);
        $this->insert('{{%menu_link_lang}}', ['link_id' => 'settings-general', 'label' => 'Configuraciones génerales', 'language' => 'es']);
        $this->insert('{{%menu_link_lang}}', ['link_id' => 'settings-reading', 'label' => 'Configuraciones de lectura', 'language' => 'es']);
        $this->insert('{{%menu_link_lang}}', ['link_id' => 'settings-cache', 'label' => 'Limpiar Cache', 'language' => 'es']);
    }

}
