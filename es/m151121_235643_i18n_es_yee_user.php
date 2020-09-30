<?php

use yeesoft\db\TranslatedMessagesMigration;

class m151121_235643_i18n_es_yee_user extends TranslatedMessagesMigration
{

    public function getLanguage()
    {
        return 'es';
    }

    public function getCategory()
    {
        return 'yee/user';
    }

    public function getTranslations()
    {
        return [
            'Child permissions' => 'Permisos derivados',
            'Child roles' => 'Roles derivados',
            'Create Permission Group' => 'Crear un grupo de permisos',
            'Create Permission' => 'Crear permisos',
            'Create Role' => 'Сrear Rol',
            'Create User' => 'Сrear Usuario',
            'Log №{id}' => 'Registro №{id}',
            'No users found.' => 'No se han encontrado usuarios.',
            'Password' => 'Contraseña',
            'Permission Groups' => 'Grupos de permisos',
            'Permission' => 'Permisos',
            'Permissions for "{role}" role' => 'Permisos para el rol "{role}"',
            'Permissions' => 'Permisos',
            'Refresh routes' => 'Refrescar rutas',
            'Registration date' => 'Fecha de registro',
            'Role' => 'Rol',
            'Roles and Permissions for "{user}"' => 'Roles y permisos para "{user}"',
            'Roles' => 'Roles',
            'Routes' => 'Rutas',
            'Search route' => 'Ruta de búsqueda',
            'Show all' => 'Mostrar todo',
            'Show only selected' => 'Mostrar solo los seleccionados',
            'Update Permission Group' => 'Actualizar grupo de permisos',
            'Update Permission' => 'Actualizar permisos',
            'Update Role' => 'Actualizar Rol',
            'Update User Password' => 'Actualizar la contraseña del usuario',
            'Update User' => 'Actualizar usuario',
            'User not found' => 'Usuario no encontrado',
            'User' => 'Usuario',
            'Users' => 'Usuarios',
            'Visit Log' => 'Registro de visitas',
            'You can not change own permissions' => 'No puede cambiar sus propios permisos',
            "You can't update own permissions!" => "¡No puede actualizar sus propios permisos!",
            '{permission} Permission Settings' => 'Configuraciones de permisos para "{permission}"',
            '{permission} Role Settings' => 'Configuraciones de Rol para "{permission}"',
        ];
    }
}
