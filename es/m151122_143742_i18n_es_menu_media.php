<?php

use yii\db\Migration;

class m151122_143742_i18n_es_menu_media extends Migration
{

    public function up()
    {
        $this->insert('{{%menu_link_lang}}', ['link_id' => 'media', 'label' => 'Multimedia', 'language' => 'es']);
        $this->insert('{{%menu_link_lang}}', ['link_id' => 'media-media', 'label' => 'Multimedia', 'language' => 'es']);
        $this->insert('{{%menu_link_lang}}', ['link_id' => 'media-album', 'label' => 'Álbumes', 'language' => 'es']);
        $this->insert('{{%menu_link_lang}}', ['link_id' => 'media-category', 'label' => 'Categorías', 'language' => 'es']);
        $this->insert('{{%menu_link_lang}}', ['link_id' => 'image-settings', 'label' => 'Configuración de imágenes', 'language' => 'es']);

    }

}
