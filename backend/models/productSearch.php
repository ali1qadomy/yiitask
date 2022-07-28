<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\product;

/**
 * productSearch represents the model behind the search form of `backend\models\product`.
 */
class productSearch extends product
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'Categoryname'], 'integer'],
            [['ProductName', 'image'], 'safe'],
            [['price'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = product::find();

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
            'Categoryname' => $this->Categoryname ,
            'price' => $this->price,
        ]);

        $query->andFilterWhere(['like', 'ProductName', $this->ProductName])
            ->andFilterWhere(['like', 'image', $this->image]);

        return $dataProvider;
    }
}
