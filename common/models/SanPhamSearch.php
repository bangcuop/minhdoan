<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\SanPham;

/**
 * SanPhamSearch represents the model behind the search form about `common\models\SanPham`.
 */
class SanPhamSearch extends SanPham
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'loai_san_pham_id', 'tinh_trang', 'luot_xem', 'dong_san_pham', 'valid', 'hang_moi', 'so_luong_san_pham'], 'integer'],
            [['ten', 'ma', 'anh', 'mau_sac', 'kich_thuoc', 'ngay_tao', 'mo_ta'], 'safe'],
            [['gia_tien'], 'number'],
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
        $query = SanPham::find();

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
            'loai_san_pham_id' => $this->loai_san_pham_id,
            'gia_tien' => $this->gia_tien,
            'tinh_trang' => $this->tinh_trang,
            'luot_xem' => $this->luot_xem,
            'dong_san_pham' => $this->dong_san_pham,
            'valid' => $this->valid,
            'ngay_tao' => $this->ngay_tao,
            'hang_moi' => $this->hang_moi,
            'so_luong_san_pham' => $this->so_luong_san_pham,
        ]);

        $query->andFilterWhere(['like', 'ten', $this->ten])
            ->andFilterWhere(['like', 'ma', $this->ma])
            ->andFilterWhere(['like', 'anh', $this->anh])
            ->andFilterWhere(['like', 'mau_sac', $this->mau_sac])
            ->andFilterWhere(['like', 'kich_thuoc', $this->kich_thuoc])
            ->andFilterWhere(['like', 'mo_ta', $this->mo_ta]);

        return $dataProvider;
    }
}
