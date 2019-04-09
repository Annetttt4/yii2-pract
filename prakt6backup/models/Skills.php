<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "skills".
 *
 * @property int $id
 * @property int $worker_id
 * @property string $name
 * @property double $proficiency_level
 * @property double $popularity_index
 *
 * @property Workers $worker
 */
class Skills extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'skills';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['worker_id'], 'integer'],
            [['proficiency_level', 'popularity_index'], 'number'],
            [['name'], 'string', 'max' => 255],
            [['worker_id'], 'exist', 'skipOnError' => true, 'targetClass' => Workers::className(), 'targetAttribute' => ['worker_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'worker_id' => 'Worker ID',
            'name' => 'Name',
            'proficiency_level' => 'Proficiency Level',
            'popularity_index' => 'Popularity Index',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getWorker()
    {
        return $this->hasOne(Workers::className(), ['id' => 'worker_id']);
    }

    public function getAll(){
        return self::find()->asArray()->all();
    }
}
