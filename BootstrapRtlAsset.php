<?php

namespace aslani\bootstrap;

use yii\web\AssetBundle;

/**
 * Asset bundle for the Twitter bootstrap Rtl css files.
 *
 * @author Ali Irani <aslani.mhd@gmail.com>
 * @since 2.0
 */
class Bootstrap5RtlAsset extends AssetBundle
{
    /**
     * @inheritDoc
     */
    public $sourcePath = '@bower/bootstrap';

    /**
     * @inheritDoc
     */
    public $css = [
        'dist/css/bootstrap.rtl.css'
    ];
}