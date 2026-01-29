<?php

/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace s4studio\redactor\models;

use Yii;

/**
 * @author Nghia Nguyen <yiidevelop@hotmail.com>
 * @since 2.0
 * @author Edmund Kawalec <e.kawalec@hotmail.com>
 * @since 2.1
 */
class ImageUploadModel extends FileUploadModel
{
    public function rules()
    {
        return [
            ['file', 'file', 'extensions' => Yii::$app->controller->module->imageAllowExtensions]
        ];
    }

}