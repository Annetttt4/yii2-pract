<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "workers".
 *
 * @property int $id
 * @property string $name
 * @property string $surname
 * @property string $assign_date
 * @property int $salary
 * @property string $position
 * @property int $sex
 *
 * @property Skills[] $skills
 */
class Workers extends \yii\db\ActiveRecord
{
    
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'workers';
        
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['assign_date'], 'safe'],
            [['salary', 'sex'], 'integer'],
            [['name', 'surname', 'position'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'surname' => 'Surname',
            'assign_date' => 'Assign Date',
            'salary' => 'Salary',
            'position' => 'Position',
            'sex' => 'Sex',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSkills()
    {
        return $this->hasMany(Skills::className(), ['worker_id' => 'id']);
    }
}
