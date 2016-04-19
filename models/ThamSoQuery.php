<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[ThamSo]].
 *
 * @see ThamSo
 */
class ThamSoQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return ThamSo[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return ThamSo|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
