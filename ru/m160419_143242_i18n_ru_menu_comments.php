<?php

use yii\db\Migration;

class m160419_143242_i18n_ru_menu_comments extends Migration
{

    public function up()
    {
        $this->insert('{{%menu_link_lang}}', ['link_id' => 'comment', 'label' => 'Комментарии', 'language' => 'ru']);
    }

}