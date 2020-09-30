<?php

use yeesoft\db\TranslatedMessagesMigration;

class m151121_235643_i18n_uk_yee_user extends TranslatedMessagesMigration
{

    public function getLanguage()
    {
        return 'uk';
    }

    public function getCategory()
    {
        return 'yee/user';
    }

    public function getTranslations()
    {
        return [
            'Child permissions' => 'Включені дозволи',
            'Child roles' => 'Включені ролі',
            'Create Permission Group' => 'Створити Групу Дозволів',
            'Create Permission' => 'Створити Право',
            'Create Role' => 'Створити Роль',
            'Create User' => 'Створити Користувача',
            'Log №{id}' => 'Відвідування №{id}',
            'No users found.' => 'Користувачів не знайдено.',
            'Password' => 'Пароль',
            'Permission Groups' => 'Групи Дозволів',
            'Permission' => 'Права',
            'Permissions for "{role}" role' => 'Дозволи для ролі "{role}"',
            'Permissions' => 'Права',
            'Refresh routes' => 'Оновити шляхи',
            'Registration date' => 'Дата реєстрації',
            'Role' => 'Роль',
            'Roles and Permissions for "{user}"' => 'Ролі і Дозволи для "{user}"',
            'Roles' => 'Ролі',
            'Routes' => 'Маршрути',
            'Search route' => 'Пошук маршруту',
            'Show all' => 'Показати всі',
            'Show only selected' => 'Показати лише вибрані',
            'Update Permission Group' => 'Оновити Групу Дозволів',
            'Update Permission' => 'Оновити Право',
            'Update Role' => 'Оновити Роль',
            'Update User Password' => 'Оновити Пароль Користувача',
            'Update User' => 'Оновити Користувача',
            'User not found' => 'Користувач не знайдений',
            'User' => 'Користувач',
            'Users' => 'Користувачі',
            'Visit Log' => 'Лог Відвідування',
            'You can not change own permissions' => 'Ви не можете змінити власні параметри доступу',
            "You can't update own permissions!" => "Ви не можете оновлювати свої права доступу!",
            '{permission} Permission Settings' => 'Налаштування Дозволу "{permission}"',
            '{permission} Role Settings' => 'Налаштування Ролі "{permission}"',
        ];
    }
}