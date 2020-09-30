<?php

use yii\db\Migration;

class m151122_143915_i18n_es_menu_menu extends Migration
{

    public function up()
    {
        $this->insert('{{%menu_link_lang}}', ['link_id' => 'menu', 'label' => 'Menú', 'language' => 'es']);
    }

}
