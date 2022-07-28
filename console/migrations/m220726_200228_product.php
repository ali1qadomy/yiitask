<?php

use yii\db\Migration;

/**
 * Class m220726_200228_product
 */
class m220726_200228_product extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('Product', [
            'id' => $this->primaryKey(),
            'ProductName' => $this->string()->notNull(),
            'image' => $this->string(),
            'Categoryname'=>$this->integer()->notNull(),
            'price'=>$this->double()->notNull()


        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m220726_200228_product cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220726_200228_product cannot be reverted.\n";

        return false;
    }
    */
}
