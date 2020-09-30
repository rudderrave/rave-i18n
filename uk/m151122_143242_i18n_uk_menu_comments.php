<?php

use yii\db\Migration;

class m151122_143242_i18n_uk_menu_comments extends Migration
{

    public function up()
    {
        $this->insert('{{%menu_link_lang}}', ['link_id' => 'comment', 'label' => 'Коментарі', 'language' => 'uk']);
    }

}