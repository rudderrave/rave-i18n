<?php

use yii\db\Migration;

class m151122_144654_i18n_es_menu_post extends Migration
{

    public function up()
    {

        $this->insert('{{%menu_link_lang}}', ['link_id' => 'post', 'label' => 'Artículos', 'language' => 'es']);
        $this->insert('{{%menu_link_lang}}', ['link_id' => 'post-post', 'label' => 'Artículos', 'language' => 'es']);
        $this->insert('{{%menu_link_lang}}', ['link_id' => 'post-category', 'label' => 'Categorías', 'language' => 'es']);
	      $this->insert('{{%menu_link_lang}}', ['link_id' => 'post-tag', 'label' => 'Tags', 'language' => 'es']);
    }

}
