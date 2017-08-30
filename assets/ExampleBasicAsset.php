<?php

namespace dominus77\mixitup3\assets;

use yii\web\AssetBundle;

/**
 * Class ExampleBasicAsset
 * @package dominus77\mixitup3\assets
 */
class ExampleBasicAsset extends AssetBundle
{
    public $sourcePath = '@dominus77/mixitup3/assets/src';

    public $css = [
        'css/reset.css',
        'css/basic.css',
    ];

    public $depends = [
        'yii\web\JqueryAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}