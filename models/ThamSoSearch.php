<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ThamSo;

/**
 * ThamSoSearch represents the model behind the search form about `app\models\ThamSo`.
 */
class ThamSoSearch extends ThamSo
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'valid'], 'integer'],
            [['ten', 'gia_tri', 'ngay_tao'], 'safe'],
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
        $query = ThamSo::find();

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
            'valid' => $this->valid,
        ]);

        $query->andFilterWhere(['like', 'ten', $this->ten])
            ->andFilterWhere(['like', 'gia_tri', $this->gia_tri])
            ->andFilterWhere(['like', 'ngay_tao', $this->ngay_tao]);

        return $dataProvider;
    }
}
