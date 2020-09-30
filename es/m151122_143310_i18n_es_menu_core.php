<?php

use yii\db\Migration;

class m151122_143310_i18n_es_menu_core extends Migration
{

    public function up()
    {
        $this->insert('{{%menu_lang}}', ['menu_id' => 'admin-menu', 'language' => 'es', 'title' => 'Menú del panel de control']);
        $this->insert('{{%menu_link_lang}}', ['link_id' => 'dashboard', 'label' => 'Tablero', 'language' => 'es']);
    }

}
