<?php

namespace common\models;

/**
 * This is the ActiveQuery class for [[ThongTinHoTro]].
 *
 * @see ThongTinHoTro
 */
class ThongtinHotroQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return ThongTinHoTro[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return ThongTinHoTro|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
