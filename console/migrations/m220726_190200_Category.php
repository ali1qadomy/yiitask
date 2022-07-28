<?php

use yii\db\Migration;

/**
 * Class m220726_190200_Category
 */
class m220726_190200_Category extends Migration
{
 
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('Category', [
            'id' => $this->primaryKey(),
            'CategoryName' => $this->string()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m220726_190200_Category cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220726_190200_Category cannot be reverted.\n";

        return false;
    }
    */
}
