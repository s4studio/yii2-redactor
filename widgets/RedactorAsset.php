<?php

/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace s4studio\redactor\widgets;

/**
 * @author Nghia Nguyen <yiidevelop@hotmail.com>
 * @since 2.0
 */
class RedactorAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@vendor/s4studio/yii2-redactor/assets';
    public $baseUrl = '@web/vendor/s4studio/yii2-redactor/widgets';
    public $depends = ['yii\web\JqueryAsset'];

    public function init()
    {
        if (YII_DEBUG) {
            $this->js[] = 'redactor.js';
            $this->css[] = 'redactor.css';
        } else {
            $this->js[] = 'redactor.min.js';
            $this->css[] = 'redactor.min.css';
        }
    }

}