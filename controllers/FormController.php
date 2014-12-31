<?php
namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Cadastro;

class FormController extends Controller
{

	
	public function actionIndex()
	{
		return $this->render('index');
	}
	
	public function actionCadastro()
	{
		$model = new Cadastro;
		return $this->render('cadastro', ['model' => $model]);
	}
}