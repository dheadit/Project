<?php

namespace app\controllers;
use app\models\Mahasiswa019;
use Yii;
use yii\data\ActiveDataProvider;

class MahasiswaController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Mahasiswa019::find()
        ]);
        return $this->render('index', [
            'dataProvider' => $dataProvider
        ]);
    }

    public function actionCreate()
    {
        $mahasiswa019 = new Mahasiswa019;
        $mahasiswa019->nim019 = '60200121019-'.rand(10,99);
        $mahasiswa019->nama019 = 'Andi Aditya Bangsawan';
        $mahasiswa019->kelas019 = 'B';
        $mahasiswa019->status019 = 'Baru';
        if ($mahasiswa019->save()) {
            Yii::$app->session->setFlash('success', 'Data Tersimpan');
            return $this->redirect(['index']);
        }
    }

    public function actionUpdate($id)
    {
        $mahasiswa019 = Mahasiswa019::findOne(['id019' => $id]);
        if($mahasiswa019 !== null){
            $mahasiswa019->kelas019 = 'B';
            $mahasiswa019->status019 = 'Update';
            $mahasiswa019->save();
            Yii::$app->session->setFlash('success', 'Data Terupdate');
        }
        return $this->redirect(['index']);
    }

    public function actionDelete($id)
    {
        $mahasiswa019 = Mahasiswa019::findOne(['id019' => $id]);
        if($mahasiswa019->delete()){
            return $this->redirect(['index']);
        }
    }

    public function actionView($id){
        $mahasiswa019 = Mahasiswa019::findOne($id);
        return $this->render('view', ['mahasiswa019' => $mahasiswa019]);
    }
}
?>