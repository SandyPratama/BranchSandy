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

    
}
?>
