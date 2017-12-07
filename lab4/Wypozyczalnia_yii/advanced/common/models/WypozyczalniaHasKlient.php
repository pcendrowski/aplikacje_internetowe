<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "wypozyczalnia_has_klient".
 *
 * @property integer $idWypozyczalnia
 * @property integer $idKlient
 *
 * @property Klient $idKlient0
 * @property Wypozyczalnia $idWypozyczalnia0
 */
class WypozyczalniaHasKlient extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'wypozyczalnia_has_klient';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idWypozyczalnia', 'idKlient'], 'required'],
            [['idWypozyczalnia', 'idKlient'], 'integer'],
            [['idKlient'], 'exist', 'skipOnError' => true, 'targetClass' => Klient::className(), 'targetAttribute' => ['idKlient' => 'idKlient']],
            [['idWypozyczalnia'], 'exist', 'skipOnError' => true, 'targetClass' => Wypozyczalnia::className(), 'targetAttribute' => ['idWypozyczalnia' => 'idWypozyczalnia']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idWypozyczalnia' => 'Id Wypozyczalnia',
            'idKlient' => 'Id Klient',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdKlient0()
    {
        return $this->hasOne(Klient::className(), ['idKlient' => 'idKlient']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdWypozyczalnia0()
    {
        return $this->hasOne(Wypozyczalnia::className(), ['idWypozyczalnia' => 'idWypozyczalnia']);
    }
}
