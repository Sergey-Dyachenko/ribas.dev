<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "article".
 *
 * @property integer $id
 * @property string $title
 * @property string $image
 * @property string $text
 * @property integer $user_id
 * @property string $date
 */
class Article extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'article';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
       return[
         [['title'], 'required'],
         [['title', 'text', 'image'], 'string'],
         [['date'], 'date', 'format' => 'php:Y-m-d'],
         [['date'], 'default', 'value' => date('Y-m-d')],
         [['title'], 'string', 'max' => 255]
       ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'image' => 'Image',
            'text' => 'Text',
            'user_id' => 'User ID',
            'date' => 'Date',
        ];
    }

    public function saveImage($filename)
    {
        $this->image = $filename;
        return $this->save(false);
    }
}
