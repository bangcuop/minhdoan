<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[ThongTinHotro]].
 *
 * @see ThongTinHotro
 */
class ThongtinHotroQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return ThongTinHotro[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return ThongTinHotro|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
