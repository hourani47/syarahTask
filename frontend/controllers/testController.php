<?php


namespace frontend\controllers;


use Google\Service\Exception;
use Google_Client;
use Google_Service_Drive;
use yii\web\Controller;

class testController extends Controller
{


    public function actionIndex(){

        return $this->render('test/index');
    }


}