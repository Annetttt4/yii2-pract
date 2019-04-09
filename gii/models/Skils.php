<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "skils".
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property string $level
 * @property string $category
 *
 * @property Worker[] $workers
 */
class Skils extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'skils';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'description', 'level', 'category'], 'required'],
            [['name', 'description', 'level', 'category'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'description' => 'Description',
            'level' => 'Level',
            'category' => 'Category',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getWorkers()
    {
        return $this->hasMany(Worker::className(), ['skils' => 'id']);
    }
}
