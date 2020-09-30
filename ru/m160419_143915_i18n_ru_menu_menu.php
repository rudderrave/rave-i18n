<?php

use yii\db\Migration;

class m160419_143915_i18n_ru_menu_menu extends Migration
{

    public function up()
    {
        $this->insert('{{%menu_link_lang}}', ['link_id' => 'menu', 'label' => 'Меню', 'language' => 'ru']);
    }

}