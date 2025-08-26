# yii2-gentelella

Yii2 widget for Gentelella admin theme based on Bootstrap 3: https://github.com/ColorlibHQ/gentelella/tree/1.4.0

## Install

``composer require --prefer-dist ereminmdev/yii2-gentelella``

## Documentation

https://github.com/ColorlibHQ/gentelella/tree/1.4.0?tab=readme-ov-file#theme-demo

## Using

Add asset to AppAsset.php file:

````
public $depends = [
    ...
    'ereminmdev\yii2\gentelella\GentelellaAsset',
];
````

Render menu items in view file:

````
<?= Menu::widget([
    'items' => [
        [
            'label' => Yii::t('app', 'Users'),
            'icon' => 'users',
            'url' => ['/users/index'],
        ],
        [
            'label' => Yii::t('app', 'Pages'),
            'icon' => 'users',
            'url' => 'javascript:',
            'items' => [
                ...
            ],
        ],
    ],
]);
````
