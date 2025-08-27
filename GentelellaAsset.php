<?php

namespace ereminmdev\yii2\gentelella;

use yii\web\AssetBundle;

class GentelellaAsset extends AssetBundle
{
    public $depends = [
        'ereminmdev\yii2\gentelella\GentelellaThemeAsset',
        'ereminmdev\yii2\gentelella\GentelellaCustomAsset',
    ];
}
