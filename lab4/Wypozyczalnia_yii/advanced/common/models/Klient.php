<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "klient".
 *
 * @property integer $idKlient
 * @property string $Imie
 * @property string $Nazwisko
 * @property string $Email
 * @property integer $Telefon
 * @property string $Nr_dokumentu_ID
 *
 * @property WypozyczalniaHasKlient[] $wypozyczalniaHasKlients
 */
class Klient extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'klient';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Imie', 'Nazwisko', 'Email', 'Telefon'], 'required'],
            [['Telefon'], 'integer'],
            [['Imie', 'Nazwisko', 'Email', 'Nr_dokumentu_ID'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idKlient' => 'Id Klient',
            'Imie' => 'Imie',
            'Nazwisko' => 'Nazwisko',
            'Email' => 'Email',
            'Telefon' => 'Telefon',
            'Nr_dokumentu_ID' => 'Nr Dokumentu  ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getWypozyczalniaHasKlients()
    {
        return $this->hasMany(WypozyczalniaHasKlient::className(), ['idKlient' => 'idKlient']);
    }
}
