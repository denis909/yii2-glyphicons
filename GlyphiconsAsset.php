<?php

namespace denis909\yii;

use yii\web\AssetBundle;

class GlyphiconsAsset extends AssetBundle
{

    public $sourcePath = '@bower/glyphicons';
    
    public $css = ['styles/glyphicons.css'];

}