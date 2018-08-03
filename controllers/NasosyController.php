<?php
/**
 * Created by PhpStorm.
 * User: saha
 * Date: 02.08.2018
 * Time: 12:13
 */

namespace app\controllers;


use app\modules\admin\models\Products;
use Yii;
use GuzzleHttp\Client; // подключаем Guzzle
use yii\helpers\Url;

class NasosyController extends \yii\web\Controller

{
    public  function  actionParser(){

        // создаем экземпляр класса
        $client = new Client();
        // отправляем запрос к странице
        $res = $client->request('GET', 'https://www.sklad-generator.ru/elektrostancii/dizelnye/genese/');
        // получаем данные между открывающим и закрывающим тегами body
        $body = $res->getBody();
        // подключаем phpQuery
        $doc = \phpQuery::newDocumentHTML($body);
        //Смотрим html страницы, определяем внешний класс списка и считываем его командой find
        $res = $doc->find(".adaptive__catalog-item .adaptive__catalog-pic .adaptive__catalog-img");
        // вывод списка в представление


        $i = 0;
        foreach ($res as $item) {
        $i ++;
        $item = pq($item);
        $img = $item->attr('src');
        $img = 'https://www.sklad-generator.ru' . $img;


        $url= $img;
        $local = Yii::getAlias('@webroot'.'/upload/products/'. 'generator'.$i.'.jpg');

        $str = 'generator'.$i.'.jpg';

        $product = new Products();
        $product->image = $str;
        $product->save();

        file_put_contents($local, file_get_contents($url));
}



        return $this->render('parser', [
            'res' => $res,

            ]);
    }



    public function actionDelete(){


        Yii::$app->db->createCommand()
            ->delete(Products::tableName())
            ->execute();
        return $this->render('delete', [


        ]);
    }
}