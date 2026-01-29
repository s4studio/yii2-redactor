<?php

/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace s4studio\redactor\actions;

use Yii;
use s4studio\redactor\models\ImageUploadModel;

/**
 * @author Nghia Nguyen <yiidevelop@hotmail.com>
 * @since 2.0
 * @author Edmund Kawalec <e.kawalec@hotmail.com>
 * @since 2.1
 */
class ImageUploadAction extends \yii\base\Action
{
    function run()
    {
        if (isset($_FILES)) {
            $model = new ImageUploadModel();
            if ($model->upload()) {
                return $model->getResponse();
            } else {
                return ['error' => 'Unable to save image file'];
            }
        }
    }

}
