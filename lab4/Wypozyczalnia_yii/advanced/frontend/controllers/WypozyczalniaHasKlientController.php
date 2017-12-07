<?php

namespace frontend\controllers;

use Yii;
use common\models\WypozyczalniaHasKlient;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

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
     * @param integer $idWypozyczalnia
     * @param integer $idKlient
     * @return mixed
     */
    public function actionView($idWypozyczalnia, $idKlient)
    {
        return $this->render('view', [
            'model' => $this->findModel($idWypozyczalnia, $idKlient),
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

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idWypozyczalnia' => $model->idWypozyczalnia, 'idKlient' => $model->idKlient]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing WypozyczalniaHasKlient model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $idWypozyczalnia
     * @param integer $idKlient
     * @return mixed
     */
    public function actionUpdate($idWypozyczalnia, $idKlient)
    {
        $model = $this->findModel($idWypozyczalnia, $idKlient);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idWypozyczalnia' => $model->idWypozyczalnia, 'idKlient' => $model->idKlient]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing WypozyczalniaHasKlient model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $idWypozyczalnia
     * @param integer $idKlient
     * @return mixed
     */
    public function actionDelete($idWypozyczalnia, $idKlient)
    {
        $this->findModel($idWypozyczalnia, $idKlient)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the WypozyczalniaHasKlient model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $idWypozyczalnia
     * @param integer $idKlient
     * @return WypozyczalniaHasKlient the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($idWypozyczalnia, $idKlient)
    {
        if (($model = WypozyczalniaHasKlient::findOne(['idWypozyczalnia' => $idWypozyczalnia, 'idKlient' => $idKlient])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
