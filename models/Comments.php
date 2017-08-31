<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "comments".
 *
 * @property integer $id
 * @property string $text_comment
 * @property integer $article_id
 * @property integer $user_id
 * @property string $date
 */
class Comments extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'comments';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['text_comment'], 'string'],
            [['article_id', 'user_id'], 'integer'],
            [['date'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'text_comment' => 'Text Comment',
            'article_id' => 'Article ID',
            'user_id' => 'User ID',
            'date' => 'Date',
        ];
    }
}
