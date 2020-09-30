<?php

use yii\db\Migration;

class m151228_235601_i18n_uk_menu_seo extends Migration
{

    public function up()
    {
        $this->insert('{{%menu_link_lang}}', ['link_id' => 'seo', 'label' => 'SEO', 'language' => 'uk']);
    }

}