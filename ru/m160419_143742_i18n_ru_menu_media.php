<?php

use yii\db\Migration;

class m160419_143742_i18n_ru_menu_media extends Migration
{

    public function up()
    {
        $this->insert('{{%menu_link_lang}}', ['link_id' => 'media', 'label' => 'Медиа', 'language' => 'ru']);
        $this->insert('{{%menu_link_lang}}', ['link_id' => 'media-media', 'label' => 'Медиа', 'language' => 'ru']);
        $this->insert('{{%menu_link_lang}}', ['link_id' => 'media-album', 'label' => 'Альбомы', 'language' => 'ru']);
        $this->insert('{{%menu_link_lang}}', ['link_id' => 'media-category', 'label' => 'Категории', 'language' => 'ru']);
        $this->insert('{{%menu_link_lang}}', ['link_id' => 'image-settings', 'label' => 'Настройки Изображений', 'language' => 'ru']);

    }

}