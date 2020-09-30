<?php

use yii\db\Migration;

class m160419_145301_i18n_ru_menu_user extends Migration
{

    public function up()
    {
        $this->insert('{{%menu_link_lang}}', ['link_id' => 'user', 'label' => 'Пользователи', 'language' => 'ru']);
        $this->insert('{{%menu_link_lang}}', ['link_id' => 'user-groups', 'label' => 'Группы Прав Доступа', 'language' => 'ru']);
        $this->insert('{{%menu_link_lang}}', ['link_id' => 'user-log', 'label' => 'Лог Посещений', 'language' => 'ru']);
        $this->insert('{{%menu_link_lang}}', ['link_id' => 'user-permission', 'label' => 'Права Доступа', 'language' => 'ru']);
        $this->insert('{{%menu_link_lang}}', ['link_id' => 'user-role', 'label' => 'Роли Пользователей', 'language' => 'ru']);
        $this->insert('{{%menu_link_lang}}', ['link_id' => 'user-user', 'label' => 'Пользователи', 'language' => 'ru']);
    }

}
