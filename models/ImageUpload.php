<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 25.08.17
 * Time: 17:22
 */

namespace app\models;

use Yii;
use yii\base\Model;
use yii\web\UploadedFile;

class ImageUpload extends Model{
    public $image;

    public function uploadFile(UploadedFile $file){
        $file->saveAs(Yii::getAlias('@web') . 'uploads/' . $file->name);
        return $file->name;
    }
}
