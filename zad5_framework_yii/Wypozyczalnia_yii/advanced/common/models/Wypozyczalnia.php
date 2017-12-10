<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "wypozyczalnia".
 *
 * @property integer $idWypozyczalnia
 * @property string $Nazwa
 * @property string $Ulica
 * @property string $Nr_budynku
 * @property string $Miasto
 * @property integer $Telefon
 *
 * @property Auto[] $autos
 * @property WypozyczalniaHasKlient[] $wypozyczalniaHasKlients
 */
class Wypozyczalnia extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'wypozyczalnia';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Nazwa', 'Ulica', 'Nr_budynku', 'Miasto', 'Telefon'], 'required'],
            [['Telefon'], 'integer'],
            [['Nazwa', 'Ulica', 'Nr_budynku', 'Miasto'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idWypozyczalnia' => 'Id Wypozyczalnia',
            'Nazwa' => 'Nazwa',
            'Ulica' => 'Ulica',
            'Nr_budynku' => 'Nr Budynku',
            'Miasto' => 'Miasto',
            'Telefon' => 'Telefon',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAutos()
    {
        return $this->hasMany(Auto::className(), ['idWypozyczalnia' => 'idWypozyczalnia']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getWypozyczalniaHasKlients()
    {
        return $this->hasMany(WypozyczalniaHasKlient::className(), ['idWypozyczalnia' => 'idWypozyczalnia']);
    }
}
