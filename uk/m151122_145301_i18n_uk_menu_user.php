<?php

use yii\db\Migration;

class m151122_145301_i18n_uk_menu_user extends Migration
{

    public function up()
    {
        $this->insert('{{%menu_link_lang}}', ['link_id' => 'user', 'label' => 'Користувачі', 'language' => 'uk']);
        $this->insert('{{%menu_link_lang}}', ['link_id' => 'user-groups', 'label' => 'Групи Дозволів', 'language' => 'uk']);
        $this->insert('{{%menu_link_lang}}', ['link_id' => 'user-log', 'label' => 'Логування Відвідування', 'language' => 'uk']);
        $this->insert('{{%menu_link_lang}}', ['link_id' => 'user-permission', 'label' => 'Дозволи', 'language' => 'uk']);
        $this->insert('{{%menu_link_lang}}', ['link_id' => 'user-role', 'label' => 'Ролі Користувачів', 'language' => 'uk']);
        $this->insert('{{%menu_link_lang}}', ['link_id' => 'user-user', 'label' => 'Користувачі', 'language' => 'uk']);
    }

}
