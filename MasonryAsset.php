<?php
/**
 * @copyright Copyright (c); nerburish, 2016
 */

namespace nerburish\masonry;

use yii\web\AssetBundle;

/**
 * Asset bundle for Masonry.js (http://masonry.desandro.com/).
 */
class MasonryAsset extends AssetBundle
{
    public $sourcePath = '@bower/jquery-masonry';

    public $js = [
        // 'jquery.masonry.min.js', // not anymore
        'dist/masonry.pkgd.min.js',
    ];

    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
