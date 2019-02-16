<?php

use yii\db\Migration;

/**
 * Class m190216_132141_skils
 */
class m190216_132141_skils extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%skils}}', [ 
            'id' => $this ->primaryKey(), 
            'name' => $this ->string(), 
            'description' => $this ->string(), 
            'level' => $this ->integer(), 
            'category' => $this ->string()
            ]); 

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190216_132141_skils cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190216_132141_skils cannot be reverted.\n";

        return false;
    }
    */
}
