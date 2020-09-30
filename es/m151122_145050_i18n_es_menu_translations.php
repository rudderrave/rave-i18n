<?php

use yii\db\Migration;

class m151122_145050_i18n_es_menu_translations extends Migration
{

    public function up()
    {
        $this->insert('{{%menu_link_lang}}', ['link_id' => 'settings-translations', 'label' => 'Traducciones de mensajes', 'language' => 'es']);
    }

}
