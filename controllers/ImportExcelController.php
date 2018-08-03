<?php
/**
 * Created by PhpStorm.
 * User: saha
 * Date: 03.08.2018
 * Time: 14:21
 */

namespace app\controllers;



use app\modules\admin\models\Products;
use app\modules\admin\models\UploadForm;
use yii\web\Controller;
use yii\web\UploadedFile;


class ImportExcelController extends Controller
{
    public function actionImport(){


        $model = new UploadForm();

        if (\Yii::$app->request->isPost) {
            $model->imageFile = UploadedFile::getInstance($model, 'imageFile');
            if ($model->upload()) {

//                Debug($model->imageFile->name);
                /**
                 * Файл для загрузки
                 */
                $fileName = \Yii::getAlias('@webroot'.'/uploads/'. $model->imageFile->name);


                /**
                 * Получаем массив из excel
                 */
                $data = \moonland\phpexcel\Excel::widget([
                    'mode' => 'import',
                    'fileName' => $fileName,
                    'setFirstRecordAsKeys' => true, // if you want to set the keys of record column with first record, if it not set, the header with use the alphabet column on excel.
                    'setIndexSheetByName' => true, // set this if your excel data with multiple worksheet, the index of array will be set with the sheet name. If this not set, the index will use numeric.
                    'getOnlySheet' => 'sheet1', // you can set this property if you want to get the specified sheet from the excel data with multiple worksheet.
                ]);

                /**
                 * Дебажим этот массив
                 */
//        Debug($data['Image']);
                /**
                 * Заливаем в базу
                 */
                foreach ($data as $item) {



                    $product = new Products();
                    $product->image = $item['Image'];
                    $product->save();

                }
                $res = 'Готово!';
                return $this->render('import', [
                    'model' => $model,
                    'res' => $res

                ]);
            }
        }





        return $this->render('import', [
            'model' => $model

        ]);
    }
}