<?php

namespace frontend\modules\admin\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\modules\admin\models\Sports;

/**
 * SportsSearch represents the model behind the search form about `frontend\modules\admin\models\Sports`.
 */
class SportsSearch extends Sports
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'minute', 'weight'], 'integer'],
            [['userName', 'AletName'], 'safe'],
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
        $query = Sports::find();

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

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'minute' => $this->minute,
            'weight' => $this->weight,
        ]);

        $query->andFilterWhere(['like', 'userName', $this->userName])
            ->andFilterWhere(['like', 'AletName', $this->AletName]);

        return $dataProvider;
    }
}
