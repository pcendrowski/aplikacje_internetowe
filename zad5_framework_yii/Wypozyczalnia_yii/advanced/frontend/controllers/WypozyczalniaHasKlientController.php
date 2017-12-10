<?php

namespace frontend\controllers;

use Yii;
use common\models\WypozyczalniaHasKlient;
use common\models\Wypozyczalnia;
use common\models\Klient;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

use yii\helpers\ArrayHelper;


/**
 * WypozyczalniaHasKlientController implements the CRUD actions for WypozyczalniaHasKlient model.
 */
class WypozyczalniaHasKlientController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all WypozyczalniaHasKlient models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => WypozyczalniaHasKlient::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single WypozyczalniaHasKlient model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new WypozyczalniaHasKlient model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new WypozyczalniaHasKlient();
        
         $wypozyczalnie = Wypozyczalnia::find()
                ->orderBy('Nazwa')
                ->all();
        
        $klienci = Klient::find()
                ->orderBy('Imie')
                ->all();
        
        $wypozyczalnie = ArrayHelper::map($wypozyczalnie, 'idWypozyczalnia', 'Nazwa');
        $klienci = ArrayHelper::map($klienci, 'idKlient', 'Imie', 'Nazwisko');

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->idWypozyczalnia_has_klient]);
        } else {
            return $this->render('create', [
                'model' => $model,
                'wypozyczalnie' => $wypozyczalnie,
                'klienci' => $klienci,
            ]);
        }
    }

    /**
     * Updates an existing WypozyczalniaHasKlient model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        
        $wypozyczalnie = Wypozyczalnia::find()
                ->orderBy('Nazwa')
                ->all();
        
        $klienci = Klient::find()
                ->orderBy('Imie')
                ->all();
        
        $wypozyczalnie = ArrayHelper::map($wypozyczalnie, 'idWypozyczalnia', 'Nazwa');
        $klienci = ArrayHelper::map($klienci, 'idKlient', 'Imie');


        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->idWypozyczalnia_has_klient]);
        } else {
            return $this->render('update', [
                'model' => $model,
                'wypozyczalnie' => $wypozyczalnie,
                'klienci' => $klienci,
            ]);
        }
    }

    /**
     * Deletes an existing WypozyczalniaHasKlient model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the WypozyczalniaHasKlient model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return WypozyczalniaHasKlient the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = WypozyczalniaHasKlient::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
