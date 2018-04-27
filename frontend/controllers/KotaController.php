<?php
namespace frontend\controllers;

use Yii;
use app\models\Kota;
use app\models\KotaSearch;
use yii\web\Controller;

class KotaController extends Controller
{
	public function actionCreate()
	{
		$model = new Kota();

		if($model->load(Yii::$app->request->post()) && $model->save()){
			return $this->redirect(['index']);
		}

		return $this->render('create', ['model' => $model]);
	}

	public function actionIndex()
    {
        $searchModel = new KotaSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionView($id)
    {
    	$model = $this->findModel($id);

    	return $this->render('view',['model' => $model]);
    }

    public function actionUpdate($id)
    {
    	$model = $this->findModel($id);

    	if($model->load(Yii::$app->request->post()) && $model->save()){
    		return $this->redirect(['index']);
    	} else {
    	return $this->render('update',['model'=> $model]);
    	}
    }

    public function actionDelete($id)
    {
    	$model = $this->findModel($id)->delete();

    	return $this->redirect(['index']);
    }

    public function findModel($id)
    {
    	if(($model = Kota::findOne($id)) !== null) {
    		return $model;
	   	} else {
	   		throw new NotFoundHttpException('The requested page does not exist');
	   	}
    }
    
}
?>
