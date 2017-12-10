<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "auto".
 *
 * @property integer $idAuto
 * @property integer $idWypozyczalnia
 * @property string $Marka
 * @property string $Model
 * @property integer $Rok_produkcji
 * @property string $Silnik
 * @property string $Moc
 * @property string $Rodzaj_paliwa
 * @property integer $Przebieg
 *
 * @property Wypozyczalnia $idWypozyczalnia0
 */
class Auto extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'auto';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idWypozyczalnia', 'Marka', 'Model', 'Rok_produkcji', 'Silnik', 'Moc', 'Rodzaj_paliwa', 'Przebieg'], 'required'],
            [['idWypozyczalnia', 'Rok_produkcji', 'Przebieg'], 'integer'],
            [['Marka', 'Model', 'Silnik', 'Moc', 'Rodzaj_paliwa'], 'string', 'max' => 45],
            [['idWypozyczalnia'], 'exist', 'skipOnError' => true, 'targetClass' => Wypozyczalnia::className(), 'targetAttribute' => ['idWypozyczalnia' => 'idWypozyczalnia']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idAuto' => 'Id Auto',
            'idWypozyczalnia' => 'Id Wypozyczalnia',
            'Marka' => 'Marka',
            'Model' => 'Model',
            'Rok_produkcji' => 'Rok Produkcji',
            'Silnik' => 'Silnik',
            'Moc' => 'Moc',
            'Rodzaj_paliwa' => 'Rodzaj Paliwa',
            'Przebieg' => 'Przebieg',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdWypozyczalnia0()
    {
        return $this->hasOne(Wypozyczalnia::className(), ['idWypozyczalnia' => 'idWypozyczalnia']);
    }
}
