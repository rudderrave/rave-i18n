<?php

use yii\db\Migration;

class m160419_145050_i18n_ru_menu_translations extends Migration
{

    public function up()
    {
        $this->insert('{{%menu_link_lang}}', ['link_id' => 'settings-translations', 'label' => 'Перевод Сообщений', 'language' => 'ru']);
    }

}