<?php

use yii\db\Migration;

class m151122_143310_i18n_uk_menu_core extends Migration
{

    public function up()
    {
        $this->insert('{{%menu_lang}}', ['menu_id' => 'admin-menu', 'language' => 'uk', 'title' => 'Меню Панелі Управління']);
        $this->insert('{{%menu_link_lang}}', ['link_id' => 'dashboard', 'label' => 'Головна', 'language' => 'uk']);
    }

}