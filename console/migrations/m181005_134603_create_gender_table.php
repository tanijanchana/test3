<?php

use yii\db\Migration;

/**
 * Handles the creation of table `gender`.
 */
class m181005_134603_create_gender_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('gender', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'status' => $this->integer(),
            'created_at' => $this->date(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('gender');
    }
}
