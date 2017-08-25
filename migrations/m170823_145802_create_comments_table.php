<?php

use yii\db\Migration;

/**
 * Handles the creation of table `comments`.
 */
class m170823_145802_create_comments_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('comments', [
            'id'            =>  $this->primaryKey(),
            'text_comment'  =>  $this->text(),
            'article_id'    =>  $this->integer(),
            'user_id'       =>  $this->integer(),
            'date'          =>  $this->date()
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('comments');
    }
}
