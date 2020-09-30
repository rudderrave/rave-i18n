<?php

use yeesoft\db\TranslatedMessagesMigration;

class m151121_232223_i18n_es_yee_menu extends TranslatedMessagesMigration
{

    public function getLanguage()
    {
        return 'es';
    }

    public function getCategory()
    {
        return 'yee/menu';
    }

    public function getTranslations()
    {
        return [
            'Menu' => 'Меnú',
            'Menus' => 'Мenús',
            'Link ID can only contain lowercase alphanumeric characters, underscores and dashes.' => 'El ID del enlace solo puede contener caracteres alfanuméricos en minúsculas, guión bajo (_) y guiones (-).',
            'Parent Link' => 'Link padre',
            'Always Visible' => 'Siempre visible',
            'No Parent' => 'Sin padre',
            'Create Menu Link' => 'Crear un enlace del menú',
            'Update Menu Link' => 'Actualizar un enlace del menú',
            'Menu Links' => 'Enlaces del menú',
            'Add New Menu' => 'Agregar un nuevo menú',
            'Add New Link' => 'Agregar un nuevo enlace',
            'An error occurred during saving menu!' => '¡Ha ocurrido un error al guardar el menú!',
            'The changes have been saved.' => 'Los cambios han sigo guardados.',
            'Please, select menu to view menu links...' => 'Por favor, seleccione un menú para ver los enlaces relacionados a él...',
            'Selected menu doesn\'t contain any link. Click "Add New Link" to create a link for this menu.' => 'El menú seleccionado no contiene ningún enlace. Haga click en "Agrear un nuevo enlace" para crear un enalce para este menú.',
        ];
    }
}
