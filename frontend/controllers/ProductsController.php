<?php
namespace frontend\controllers;

use Yii;
//use frontend\models\имяМодели;  имена моделей
use yii\web\Controller;


class ProductsController extends Controller
{
    public $layout = 'products';
    public function actionIndex()
    {
        return $this->render('index');
    }
}