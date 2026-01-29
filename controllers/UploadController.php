<?php

/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace s4studio\redactor\controllers;

use yii\web\Response;

/**
 * @author Nghia Nguyen <yiidevelop@hotmail.com>
 * @since 2.0
 * @author Edmund Kawalec <e.kawalec@hotmail.com>
 * @since 2.1
 */
class UploadController extends \yii\web\Controller
{

    public $enableCsrfValidation = false;

    public function behaviors()
    {
        return [
            [
                'class' => 'yii\filters\ContentNegotiator',
                'formats' => [
                    'application/json' => Response::FORMAT_JSON
                ],
            ]
        ];
    }

    public function actions()
    {
        return [
            'file' => 's4studio\redactor\actions\FileUploadAction',
            'image' => 's4studio\redactor\actions\ImageUploadAction',
            'image-json' => 's4studio\redactor\actions\ImageManagerJsonAction',
            'file-json' => 's4studio\redactor\actions\FileManagerJsonAction',
        ];
    }

}
