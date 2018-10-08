<?php

use yii\db\Migration;

/**
 * Handles adding description to table `gender`.
 */
class m181005_135935_add_description_column_to_gender_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('gender', 'description', $this->string()->after('name'));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('gender', 'description');
    }
}
