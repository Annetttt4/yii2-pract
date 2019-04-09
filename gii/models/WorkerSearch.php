<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Worker;

/**
 * WorkerSearch represents the model behind the search form of `app\models\Worker`.
 */
class WorkerSearch extends Worker
{
    public $skilsName;
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'skils'], 'integer'],
            [['famila', 'name', 'lastname', 'position','skilsName'], 'safe'],
            [['salary'], 'number'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Worker::find();
       $query->joinWith(['skils0']);
        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $dataProvider->sort->attributes['skilsName'] = [
            'asc' => [Skils::tableName().'.name' => SORT_ASC],
            'desc' => [Skils::tableName().'.name' => SORT_DESC],
        ];

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'skils' => $this->skils,
            'salary' => $this->salary,
        ]);

        $query->andFilterWhere(['like', 'famila', $this->famila])
            ->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'lastname', $this->lastname])
            ->andFilterWhere(['like', 'position', $this->position])
            ->andFilterWhere(['like', Skils::tableName().'.name', $this->skilsName]);

        return $dataProvider;
    }
}
