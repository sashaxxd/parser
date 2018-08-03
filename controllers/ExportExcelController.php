<?php
/**
 * Created by PhpStorm.
 * User: saha
 * Date: 03.08.2018
 * Time: 13:59
 */

namespace app\controllers;


use app\modules\admin\models\Products;
use yii\web\Controller;

class ExportExcelController extends Controller
{
     public function actionExport(){

         \moonland\phpexcel\Excel::export([
             'models' => Products::find()->all(),
             'mode' => 'export', //default value as 'export'
             'format' => 'Excel2007',
             'columns' => ['id','image'], //without header working, because the header will be get label from attribute label.
             'headers' => ['column1' => 'id','column2' => 'image'],
         ]);


         return $this->render('export', [


         ]);
     }
}