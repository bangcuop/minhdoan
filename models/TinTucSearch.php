<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TinTuc;

/**
 * TinTucSearch represents the model behind the search form about `app\models\TinTuc`.
 */
class TinTucSearch extends TinTuc
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'valid', 'loai'], 'integer'],
            [['tieu_de', 'noi_dung', 'ngay_tao'], 'safe'],
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
        $query = TinTuc::find();

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
            'ngay_tao' => $this->ngay_tao,
            'valid' => $this->valid,
            'loai' => $this->loai,
        ]);

        $query->andFilterWhere(['like', 'tieu_de', $this->tieu_de])
            ->andFilterWhere(['like', 'noi_dung', $this->noi_dung]);

        return $dataProvider;
    }
}
