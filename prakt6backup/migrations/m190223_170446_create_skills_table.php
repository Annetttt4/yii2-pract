<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%skills}}`.
 */
class m190223_170446_create_skills_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%skills}}', [
            'id' => $this->primaryKey(),
            'worker_id' => $this->integer(),
            'name' => $this->String(),
            'proficiency_level' => $this->float(),
            'popularity_index' => $this->float()
        ]);

        $this->addForeignKey(
            'fk-skills-worker_id',
            'skills',
            'worker_id',
            'workers',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%skills}}');
    }
}
