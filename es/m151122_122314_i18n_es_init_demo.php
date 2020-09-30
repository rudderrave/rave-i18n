<?php

use yii\db\Migration;

class m151122_122314_i18n_es_init_demo extends Migration
{
    public function up()
    {
        $this->insert('{{%menu_lang}}', ['menu_id' => 'main-menu', 'language' => 'es', 'title' => 'Menú principal']);

        $this->insert('{{%menu_link_lang}}', ['link_id' => 'home', 'label' => 'Inicio', 'language' => 'es']);
        $this->insert('{{%menu_link_lang}}', ['link_id' => 'about', 'label' => 'Sobre nosotros', 'language' => 'es']);
        $this->insert('{{%menu_link_lang}}', ['link_id' => 'test-page', 'label' => 'Página de prueba', 'language' => 'es']);
        $this->insert('{{%menu_link_lang}}', ['link_id' => 'contact', 'label' => 'Contacto', 'language' => 'es']);

        $this->insert('{{%page_lang}}', ['page_id' => '1', 'title' => 'Página de prueba', 'language' => 'es',
            'content' => '<p style="text-align: justify;">Pellentesque mattis nibh nec nunc fermentum lobortis. Cras malesuada ipsum eget massa pulvinar euismod. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer id ullamcorper nibh, id blandit ante. Suspendisse non ante commodo, finibus nibh at, sollicitudin felis. Aliquam interdum eros eget tempor porta. Quisque viverra velit magna, ac eleifend mi vehicula nec. Curabitur sollicitudin metus eget odio posuere pulvinar. Nullam vestibulum massa ac dolor mattis pharetra. Vestibulum finibus non massa ut cursus.</p>' .
                '<p style="text-align: justify;">Proin eget ullamcorper elit, ac luctus ex. Etiam pellentesque, tortor in efficitur semper, tellus lorem blandit augue, sed euismod purus velit nec libero. Pellentesque dictum faucibus augue, ac rutrum velit. Quisque tristique neque sit amet turpis consectetur rutrum. Aliquam ac vulputate mauris.</p>']);

        $this->insert('{{%post_lang}}', ['post_id' => '1', 'title' => 'Lorem ipsum dolor sit nibh', 'language' => 'es',
            'content' => '<p style="text-align: justify;">Consectetur adipiscing elit. Suspendisse non ante commodo, finibus nibh at, sollicitudin felis. Aliquam interdum eros eget tempor porta. Quisque viverra velit magna, ac eleifend mi vehicula nec. Curabitur sollicitudin metus eget odio posuere pulvinar. Nullam vestibulum massa ac dolor mattis pharetra. Vestibulum finibus non massa ut cursus.</p>' .
                '<p style="text-align: justify;">Integer id ullamcorper nibh, id blandit ante. Lorem ipsum dolor sit amet, Proin eget ullamcorper elit, ac luctus ex. Pellentesque mattis nibh nec nunc fermentum lobortis. Cras malesuada ipsum eget massa pulvinar euismod. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam pellentesque, tortor in efficitur semper, tellus lorem blandit augue, sed euismod purus velit nec libero. Pellentesque dictum faucibus augue, ac rutrum velit. Quisque tristique neque sit amet turpis consectetur rutrum. Aliquam ac vulputate mauris.</p>']);

        $this->insert('{{%post_lang}}', ['post_id' => '2', 'title' => 'Suspendisse non ante commodo', 'language' => 'es',
            'content' => '<p style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer id ullamcorper nibh, id blandit ante. Aliquam interdum eros eget tempor porta. Quisque viverra velit magna, ac eleifend mi vehicula nec. Curabitur sollicitudin metus eget odio posuere pulvinar. Nullam vestibulum massa ac dolor mattis pharetra. Vestibulum finibus non massa ut cursus.</p>' .
                '<p style="text-align: justify;">Proin eget ullamcorper elit, ac luctus ex. Suspendisse non ante commodo, finibus nibh at, sollicitudin felis. Pellentesque mattis nibh nec nunc fermentum lobortis. Cras malesuada ipsum eget massa pulvinar euismod. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam pellentesque, tortor in efficitur semper, tellus lorem blandit augue, sed euismod purus velit nec libero. Pellentesque dictum faucibus augue, ac rutrum velit. Quisque tristique neque sit amet turpis consectetur rutrum. Aliquam ac vulputate mauris.</p>']);

    }

}
