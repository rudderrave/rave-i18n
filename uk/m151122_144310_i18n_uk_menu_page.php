<?php

use yii\db\Migration;

class m151122_144310_i18n_uk_menu_page extends Migration
{

    public function up()
    {
        $this->insert('{{%menu_link_lang}}', ['link_id' => 'page', 'label' => 'Сторінки', 'language' => 'uk']);
    }

}