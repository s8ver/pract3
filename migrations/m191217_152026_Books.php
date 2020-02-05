<?php

use yii\db\Migration;

/**
 * Class m191217_152026_Books
 */
class m191217_152026_Books extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m191217_152026_Books cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m191217_152026_Books cannot be reverted.\n";

        return false;
    }
    */
}
