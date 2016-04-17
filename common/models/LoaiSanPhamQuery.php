<?php

namespace common\models;

/**
 * This is the ActiveQuery class for [[LoaiSanPham]].
 *
 * @see LoaiSanPham
 */
class LoaiSanPhamQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return LoaiSanPham[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return LoaiSanPham|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
