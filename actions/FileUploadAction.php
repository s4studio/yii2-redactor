<?php

namespace s4studio\redactor\actions;

use Yii;
use yii\base\Action;
use s4studio\redactor\models\FileUploadModel;

/**
 * @author Nghia Nguyen <yiidevelop@hotmail.com>
 * @since 2.0
 * @author Edmund Kawalec <e.kawalec@hotmail.com>
 * @since 2.1
 */
class FileUploadAction extends Action
{
    function run()
    {
        if (isset($_FILES)) {
            $model = new FileUploadModel();
            if ($model->upload()) {
                return $model->getResponse();
            } else {
                return ['error' => 'Unable to save file'];
            }
        }
    }

}
