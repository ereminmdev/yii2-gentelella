<?php

namespace ereminmdev\yii2\gentelella;

use yii\web\AssetBundle;

class GentelellaAsset extends AssetBundle
{
    public $sourcePath = '@npm/gentelella/build';

    /*public $js = [
        YII_DEBUG ? 'js/custom.js' : 'js/custom.min.js',
    ];*/

    public $css = [
        YII_DEBUG ? 'css/custom.css' : 'css/custom.min.css',
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapPluginAsset',
        'rmrevin\yii\fontawesome\AssetBundle',
        'ereminmdev\yii2\gentelella\GentelellaCustomAsset',
    ];
}
