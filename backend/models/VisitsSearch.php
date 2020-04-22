<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Visits;

/**
 * VisitsSearch represents the model behind the search form of `backend\models\Visits`.
 */
class VisitsSearch extends Visits
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['vid', 'cid', 'did', 'cost', 'Extra', 'discount', 'sum', 'pay_bt_card', 'pay_cash', 'pay_online'], 'integer'],
            [['visit_date', 'therapy', 'presenceـinـoffice', 'visit_start', 'visit_end', 'next_visit', 'comment', 'prescription', 'attach'], 'safe'],
            [['online'], 'boolean'],
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
        $query = Visits::find();

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
            'vid' => $this->vid,
            'cid' => $this->cid,
            'did' => $this->did,
            'visit_date' => $this->visit_date,
            'online' => $this->online,
            'presenceـinـoffice' => $this->presenceـinـoffice,
            'visit_start' => $this->visit_start,
            'visit_end' => $this->visit_end,
            'cost' => $this->cost,
            'Extra' => $this->Extra,
            'discount' => $this->discount,
            'sum' => $this->sum,
            'pay_bt_card' => $this->pay_bt_card,
            'pay_cash' => $this->pay_cash,
            'pay_online' => $this->pay_online,
            'next_visit' => $this->next_visit,
        ]);

        $query->andFilterWhere(['like', 'therapy', $this->therapy])
            ->andFilterWhere(['like', 'comment', $this->comment])
            ->andFilterWhere(['like', 'prescription', $this->prescription])
            ->andFilterWhere(['like', 'attach', $this->attach]);

        return $dataProvider;
    }
}
