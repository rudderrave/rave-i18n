<?php

use yeesoft\db\TranslatedMessagesMigration;

class m160419_235643_i18n_ru_yee_user extends TranslatedMessagesMigration
{

    public function getLanguage()
    {
        return 'ru';
    }

    public function getCategory()
    {
        return 'yee/user';
    }

    public function getTranslations()
    {

        return [
            'Child permissions' => 'Включенные права доступа',
            'Child roles' => 'Включенные роли',
            'Create Permission Group' => 'Создать Группу Прав Доступа',
            'Create Permission' => 'Создать Право Доступа',
            'Create Role' => 'Создать Роль',
            'Create User' => 'Создать Пользователя',
            'Log №{id}' => 'Посещение №{id}',
            'No users found.' => 'Пользователей не найдено.',
            'Password' => 'Пароль',
            'Permission Groups' => 'Группы Прав Доступа',
            'Permission' => 'Прав Доступа',
            'Permissions for "{role}" role' => 'Права доступа для роли "{role}"',
            'Permissions' => 'Права доступа',
            'Refresh routes' => 'Обновить пути',
            'Registration date' => 'Дата регистрации',
            'Role' => 'Роль',
            'Roles and Permissions for "{user}"' => 'Роли и Права доступа для "{user}"',
            'Roles' => 'Роли',
            'Routes' => 'Маршруты',
            'Search route' => 'Поиск маршрутов',
            'Show all' => 'Показать все',
            'Show only selected' => 'Показать только избранные',
            'Update Permission Group' => 'Обновить Группу прав доступа',
            'Update Permission' => 'Обновить право доступа',
            'Update Role' => 'Обновить Роль',
            'Update User Password' => 'Обновить Пароль пользователя',
            'Update User' => 'Обновить пользователя',
            'User not found' => 'Пользователь не найден',
            'User' => 'Пользователь',
            'Users' => 'Пользователи',
            'Visit Log' => 'Лог Посещения',
            'You can not change own permissions' => 'Вы не можете изменить собственные права доступа',
            "You can't update own permissions!" => "Вы не можете изменить собственные права доступа!",
            '{permission} Permission Settings' => 'Настройки прав доступа "{permission}"',
            '{permission} Role Settings' => 'Настройки роли "{permission}"',
        ];

    }
}