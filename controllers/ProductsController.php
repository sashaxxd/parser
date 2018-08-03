<?php
/**
 * Created by PhpStorm.
 * User: saha
 * Date: 02.08.2018
 * Time: 14:59
 */

namespace app\controllers;

use app\modules\admin\models\Products;
use yii\web\Controller;


class ProductsController extends Controller
{
     public function actionIndex(){

         $products = Products::find()->all();
         return $this->render('index',
             [
                 'products' => $products
             ]);
     }
}