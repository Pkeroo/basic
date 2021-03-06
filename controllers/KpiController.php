<?php

namespace app\controllers;
use yii\data\ArrayDataProvider;
class KpiController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
    
    public function actionKpi1()
    {
        $sql = "SELECT k.kpiname,k.acol,k.bcol,k.target
                FROM
                kpi k";
        $data = \yii :: $app->db->createCommand($sql)->queryAll();
        //$dataProvider = new \yii\data\ArrayDataProvider()
        $dataProvider = new ArrayDataProvider([
            'allModels'=>$data
        ]);
        return $this->render('kpi1',['dataProvider'=>$dataProvider]);
    }

}
