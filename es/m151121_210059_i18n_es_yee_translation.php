<?php

use yeesoft\db\TranslatedMessagesMigration;

class m151121_210059_i18n_es_yee_translation extends TranslatedMessagesMigration
{

    public function getLanguage()
    {
        return 'es';
    }

    public function getCategory()
    {
        return 'yee/translation';
    }

    public function getTranslations()
    {
        return [
            'Add New Source Message' => 'Agregar un nuevo origen de mensaje',
            'Category' => 'Categoría',
            'Create Message Source' => 'Crear un nuevo origen de mensaje',
            'Create New Category' => 'Crear una nueva Categoría',
            'Immutable' => 'Inmodificable',
            'Message Translation' => 'Traducción del mensaje',
            'New Category Name' => 'Nuevo nombre de categoría',
            'Please, select message group and language to view translations...' => 'Por favor, seleccione un grupo de mensaje a un lenguaje para ver las traducciones...',
            'Source Message' => 'Origen de Mensaje',
            'Update Message Source' => 'Actualizar origen de mensaje',
            '{n, plural, =1{1 message} other{# messages}}' => '{n, plural, =1{1 mensaje} other{# mensajes}}',
        ];
    }

}
