<?php

namespace aslani\bootstrap5;

use yii\web\AssetBundle;

/**
 * Asset bundle for the Twitter bootstrap Rtl css files.
 *
 * @author Mehdi Aslani <aslani.mhd@gmail.com>
 * @since 2.0
 */
class BootstrapRtlAsset extends AssetBundle
{
    /**
     * @inheritDoc
     */
    public $sourcePath = '@bower/bootstrap/dist';
     /**
     * @inheritDoc
     */
     public $css = [
        'css/bootstrap.rtl.min.css',
    ];

    public $js = [
        'js/bootstrap.bundle.min.js',
    ];

    public $depends = [
        'yii\web\YiiAsset',
    ];

}
