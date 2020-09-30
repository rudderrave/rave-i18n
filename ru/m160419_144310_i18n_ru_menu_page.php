<?php

use yii\db\Migration;

class m160419_144310_i18n_ru_menu_page extends Migration
{

    public function up()
    {
        $this->insert('{{%menu_link_lang}}', ['link_id' => 'page', 'label' => 'Страницы', 'language' => 'ru']);
    }

}