<?php

use yii\db\Migration;

/**
 * Class m190216_132022_works
 */
class m190216_132022_works extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%works}}', [ 
            'id' => $this ->primaryKey(), 
            'familia' => $this ->string(), 
            'name' => $this ->string(), 
            'lastname' => $this ->integer(), 
            'posiyion' => $this ->string(),
            'skils' => $this ->string(),
            'salary' => $this ->float()
            ]); 
            $this->addForeignKey('skils', 'works', 'skils',
            'skils', 'id', 'CASCADE');

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190216_132022_works cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190216_132022_works cannot be reverted.\n";

        return false;
    }
    */
}
