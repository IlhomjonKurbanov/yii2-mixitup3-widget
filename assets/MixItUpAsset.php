<?php

namespace dominus77\mixitup3\assets;

use yii\web\AssetBundle;

/**
 * Class MixItUpAsset
 * @package dominus77\mixitup3\assets
 */
class MixItUpAsset extends AssetBundle
{
    /**
     * @var string
     */
    public $sourcePath = '@vendor/patrickkunka/mixitup';

    /**
     * @var array
     */
    public $js = [];

    /**
     * @inheritdoc
     */
    public function init()
    {
        $min = YII_ENV_DEV ? '' : '.min';
        $this->js[] = 'dist/mixitup' . $min . '.js';
    }

    /**
     * @var array
     */
    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
