<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Custommers;

/**
 * CustommersSearch represents the model behind the search form of `backend\models\Custommers`.
 */
class CustommersSearch extends Custommers
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cid', 'birth_order', 'child_count'], 'integer'],
            [['doc_no', 'firts_time_visit', 'first_name', 'last_name', 'father_name', 'gender', 'birth_date', 'education_level', 'major', 'maritalـstatus', 'job', 'birth_place', 'primary_hand', 'mobile_number', 'home_phone', 'other_phones', 'referrer', 'address'], 'safe'],
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
        $query = Custommers::find();

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
            'cid' => $this->cid,
            'firts_time_visit' => $this->firts_time_visit,
            'birth_date' => $this->birth_date,
            'birth_order' => $this->birth_order,
            'child_count' => $this->child_count,
        ]);

        $query->andFilterWhere(['like', 'doc_no', $this->doc_no])
            ->andFilterWhere(['like', 'first_name', $this->first_name])
            ->andFilterWhere(['like', 'last_name', $this->last_name])
            ->andFilterWhere(['like', 'father_name', $this->father_name])
            ->andFilterWhere(['like', 'gender', $this->gender])
            ->andFilterWhere(['like', 'education_level', $this->education_level])
            ->andFilterWhere(['like', 'major', $this->major])
            ->andFilterWhere(['like', 'maritalـstatus', $this->maritalـstatus])
            ->andFilterWhere(['like', 'job', $this->job])
            ->andFilterWhere(['like', 'birth_place', $this->birth_place])
            ->andFilterWhere(['like', 'primary_hand', $this->primary_hand])
            ->andFilterWhere(['like', 'mobile_number', $this->mobile_number])
            ->andFilterWhere(['like', 'home_phone', $this->home_phone])
            ->andFilterWhere(['like', 'other_phones', $this->other_phones])
            ->andFilterWhere(['like', 'referrer', $this->referrer])
            ->andFilterWhere(['like', 'address', $this->address]);

        return $dataProvider;
    }
}
