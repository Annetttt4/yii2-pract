<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "worker".
 *
 * @property int $id
 * @property string $famila
 * @property string $name
 * @property string $lastname
 * @property string $position
 * @property int $skils
 * @property double $salary
 *
 * @property Skils $skils0
 */
class Worker extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'worker';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['famila', 'name', 'lastname', 'position', 'skils', 'salary'], 'required'],
            [['skils'], 'integer'],
            [['salary'], 'number'],
            [['famila', 'name', 'lastname', 'position'], 'string', 'max' => 100],
            [['skils'], 'exist', 'skipOnError' => true, 'targetClass' => Skils::className(), 'targetAttribute' => ['skils' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'famila' => 'Famila',
            'name' => 'Name',
            'lastname' => 'Lastname',
            'position' => 'Position',
            'skils' => 'Skils',
            'salary' => 'Salary',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSkils0()
    {
        return $this->hasOne(Skils::className(), ['id' => 'skils']);
    }
}
