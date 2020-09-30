<?php

use yii\db\Migration;

class m151122_143742_i18n_uk_menu_media extends Migration
{

    public function up()
    {
        $this->insert('{{%menu_link_lang}}', ['link_id' => 'media', 'label' => 'Медіа', 'language' => 'uk']);
        $this->insert('{{%menu_link_lang}}', ['link_id' => 'media-media', 'label' => 'Медіа', 'language' => 'uk']);
        $this->insert('{{%menu_link_lang}}', ['link_id' => 'media-album', 'label' => 'Альбоми', 'language' => 'uk']);
        $this->insert('{{%menu_link_lang}}', ['link_id' => 'media-category', 'label' => 'Категорії', 'language' => 'uk']);
        $this->insert('{{%menu_link_lang}}', ['link_id' => 'image-settings', 'label' => 'Налаштування Зображень', 'language' => 'uk']);

    }

}