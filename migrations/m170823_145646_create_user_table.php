<?php

use yii\db\Migration;

/**
 * Handles the creation of table `user`.
 */
class m170823_145646_create_user_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('user', [
            'id'        =>  $this->primaryKey(),
            'name'      =>  $this->string(),
            'surename'  =>  $this->string(),
            'email'     =>  $this->string()->defaultValue(null),
            'password'  =>  $this->string(),
            'role'      =>  $this->string(),

        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('user');
    }
}
