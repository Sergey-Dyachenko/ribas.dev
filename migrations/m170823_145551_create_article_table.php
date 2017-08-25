<?php

use yii\db\Migration;

/**
 * Handles the creation of table `article`.
 */
class m170823_145551_create_article_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('article', [
            'id'        =>  $this->primaryKey(),
            'title'     =>  $this->string(),
            'image'     =>  $this->text(),
            'text'      =>  $this->text(),
            'user_id'   =>  $this->integer(),
            'date'      =>  $this->date(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('article');
    }
}
