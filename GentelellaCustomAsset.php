<?php

namespace ereminmdev\yii2\gentelella;

use yii\web\AssetBundle;

class GentelellaCustomAsset extends AssetBundle
{
    public $sourcePath = '@vendor/ereminmdev/yii2-gentelella/assets';

    public $js = [
        'gentelella.js',
    ];

    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
