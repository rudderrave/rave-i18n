<?php

use yii\db\Migration;

class m160419_143310_i18n_ru_menu_core extends Migration
{

    public function up()
    {
        $this->insert('{{%menu_lang}}', ['menu_id' => 'admin-menu', 'language' => 'ru', 'title' => 'Меню Панели Управления']);
        $this->insert('{{%menu_link_lang}}', ['link_id' => 'dashboard', 'label' => 'Главная', 'language' => 'ru']);
    }

}