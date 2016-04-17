<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\LoaiSanPham;

/**
 * LoaiSanPhamSearch represents the model behind the search form about `common\models\LoaiSanPham`.
 */
class LoaiSanPhamSearch extends LoaiSanPham
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'valid', 'id_cha'], 'integer'],
            [['ten', 'ma', 'ngay_tao'], 'safe'],
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
        $query = LoaiSanPham::find();

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
            'ngay_tao' => $this->ngay_tao,
            'id_cha' => $this->id_cha,
        ]);

        $query->andFilterWhere(['like', 'ten', $this->ten])
            ->andFilterWhere(['like', 'ma', $this->ma]);

        return $dataProvider;
    }
}
