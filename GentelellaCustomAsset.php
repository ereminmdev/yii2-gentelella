<?php

namespace ereminmdev\yii2\gentelella;

use yii\web\AssetBundle;

class GentelellaCustomAsset extends AssetBundle
{
    public $sourcePath = '@vendor/ereminmdev/yii2-gentelella/assets';

    public $js = [
        'gentelella.js',
    ];

    public $css = [
        'gentelella.css',
    ];

    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
