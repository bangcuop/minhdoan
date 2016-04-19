<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\LienHe;

/**
 * LienHeSearch represents the model behind the search form about `app\models\LienHe`.
 */
class LienHeSearch extends LienHe
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'valid'], 'integer'],
            [['ho_ten', 'dia_chi', 'email', 'so_dien_thoai', 'gioi_tinh_kh', 'tuoi', 'facebook', 'gmail', 'noi_dung', 'ngay_tao'], 'safe'],
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
        $query = LienHe::find();

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
        ]);

        $query->andFilterWhere(['like', 'ho_ten', $this->ho_ten])
            ->andFilterWhere(['like', 'dia_chi', $this->dia_chi])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'so_dien_thoai', $this->so_dien_thoai])
            ->andFilterWhere(['like', 'gioi_tinh_kh', $this->gioi_tinh_kh])
            ->andFilterWhere(['like', 'tuoi', $this->tuoi])
            ->andFilterWhere(['like', 'facebook', $this->facebook])
            ->andFilterWhere(['like', 'gmail', $this->gmail])
            ->andFilterWhere(['like', 'noi_dung', $this->noi_dung]);

        return $dataProvider;
    }
}
