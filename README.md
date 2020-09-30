# rave-i18n

##Rave CMS&ERP Internationalization Migrations

####Migrations for Rave CMS&ERP powered site internationalization

This module is part of Rave CMS&ERP (based on Yii2 Framework).

Installation
------------

- Either run

```
composer require  rudderrave/rave-i18n "*"
```

or add

```
"rudderrave/rave-i18n": "*"
```

to the require section of your `composer.json` file.

- Run migrations. You must replace <locale> with locale you want to install.

```php
php yii migrate --migrationPath=@vendor/ravesoft/rave-i18n/<locale>/
```

- List of supported locales:

  `uk` - Ukrainian
  `de` - 
  `fr` - 
  `pt` - 
  `es` - 
  `ru` - 

