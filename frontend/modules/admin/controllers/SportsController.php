<?php

namespace frontend\modules\admin\controllers;

use Yii;
use frontend\modules\admin\models\Sports;
use frontend\modules\admin\models\SportsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SportsController implements the CRUD actions for Sports model.
 */
class SportsController extends Controller
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
     * Lists all Sports models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new SportsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Sports model.
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
     * Creates a new Sports model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Sports();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Sports model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Sports model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }
    public function actionCardio(){
        
        $name=Yii::$app->user->identity->username;
        $oguns =Yii::$app->db->createCommand("SELECT SUM(minute) FROM `sports` WHERE userName='$name'")->queryOne();
       foreach($oguns as $result) {
        //echo "<option value='".$result."'>".$result."</option>";
                return $result;

    }
    }
     public function actionWeight(){
        
        $name=Yii::$app->user->identity->username;
        $oguns =Yii::$app->db->createCommand("SELECT SUM(weight) FROM `sports` WHERE userName='$name'")->queryOne();
       foreach($oguns as $result) {
        //echo "<option value='".$result."'>".$result."</option>";
                return $result;

    }
    }
    /**
     * Finds the Sports model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Sports the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Sports::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
