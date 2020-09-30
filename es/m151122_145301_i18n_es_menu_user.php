<?php

use yii\db\Migration;

class m151122_145301_i18n_es_menu_user extends Migration
{

    public function up()
    {
        $this->insert('{{%menu_link_lang}}', ['link_id' => 'user', 'label' => 'Usuarios', 'language' => 'es']);
        $this->insert('{{%menu_link_lang}}', ['link_id' => 'user-groups', 'label' => 'Grupos de permisos', 'language' => 'es']);
        $this->insert('{{%menu_link_lang}}', ['link_id' => 'user-log', 'label' => 'Registro de visitas', 'language' => 'es']);
        $this->insert('{{%menu_link_lang}}', ['link_id' => 'user-permission', 'label' => 'Permisos', 'language' => 'es']);
        $this->insert('{{%menu_link_lang}}', ['link_id' => 'user-role', 'label' => 'Roles', 'language' => 'es']);
        $this->insert('{{%menu_link_lang}}', ['link_id' => 'user-user', 'label' => 'Usuarios', 'language' => 'es']);
    }

}
