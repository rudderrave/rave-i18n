<?php

use yii\db\Migration;

class m151122_144654_i18n_uk_menu_post extends Migration
{

    public function up()
    {
        
        $this->insert('{{%menu_link_lang}}', ['link_id' => 'post', 'label' => 'Записи', 'language' => 'uk']);
        $this->insert('{{%menu_link_lang}}', ['link_id' => 'post-post', 'label' => 'Записи', 'language' => 'uk']);
        $this->insert('{{%menu_link_lang}}', ['link_id' => 'post-category', 'label' => 'Категорії', 'language' => 'uk']);

    }

}