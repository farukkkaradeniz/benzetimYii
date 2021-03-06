<?php

namespace frontend\modules\admin\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\modules\admin\models\Yemekler;

/**
 * YemeklerSearch represents the model behind the search form about `frontend\modules\admin\models\Yemekler`.
 */
class YemeklerSearch extends Yemekler
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'kalori'], 'integer'],
            [['yemekName', 'ogunid'], 'safe'],
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
        $query = Yemekler::find();

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
            'kalori' => $this->kalori,
        ]);

        $query->andFilterWhere(['like', 'yemekName', $this->yemekName])
            ->andFilterWhere(['like', 'ogunid', $this->ogunid]);

        return $dataProvider;
    }
}
