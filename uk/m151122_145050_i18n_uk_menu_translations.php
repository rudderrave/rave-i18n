<?php

use yii\db\Migration;

class m151122_145050_i18n_uk_menu_translations extends Migration
{

    public function up()
    {
        $this->insert('{{%menu_link_lang}}', ['link_id' => 'settings-translations', 'label' => 'Переклад Повідомлень', 'language' => 'uk']);
    }

}