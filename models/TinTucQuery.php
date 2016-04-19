<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[TinTuc]].
 *
 * @see TinTuc
 */
class TinTucQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return TinTuc[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return TinTuc|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
