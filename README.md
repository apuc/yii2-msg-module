После установки расширения необходимо поднять миграции
```
php yii migrate/up —migrationPath=@vendor/apuc/yii2-msg-module/migrations
```
Затем добавьте модуль расширения в конфиг вашего приложения
```
'modules' => [
    ...
    'dialog' => [
        'class' => 'apuc\msg_module\Module',
    ],
    ...
]
```

Так же необходимо добавить правила маршрутизации в конфиг вашего приложения
```$xslt
'urlManager' => [
    ...
    'rules' => [
        ['class' => 'yii\rest\UrlRule', 'controller' =>
            [
                'dialog/dialog-message',
                'dialog/dialog',
                'dialog/dialog-user',
            ],
            'pluralize'=>false],
    ],
],
```