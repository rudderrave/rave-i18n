<?php

use yii\db\Migration;

class m160419_144654_i18n_ru_menu_post extends Migration
{

    public function up()
    {
        
        $this->insert('{{%menu_link_lang}}', ['link_id' => 'post', 'label' => 'Записи', 'language' => 'ru']);
        $this->insert('{{%menu_link_lang}}', ['link_id' => 'post-post', 'label' => 'Записи', 'language' => 'ru']);
        $this->insert('{{%menu_link_lang}}', ['link_id' => 'post-category', 'label' => 'Категории', 'language' => 'ru']);

    }

}