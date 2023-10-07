<?php

namespace app\controllers;

use app\models\Users;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

class UsersController extends Controller
{    
    public function actionIndex(){
        $UsersModel = new Users();
        $data = $UsersModel->selectAll();

        return $this->render('index', [
            'UsersModel' => $UsersModel,
            'data' => $data,
        ]);
    }

    public function actionView($IdUser){
        $data = Users::findOne($IdUser);

        return $this->render('view', [
            'data' => $data,
        ]);
    }

    public function actionCreate(){
        $UsersModel = new Users();

        if ($this->request->isPost) {
            $postData = ($this->request->post())['Users'];

            $UsersModel->IdRole = $postData['IdRole'];
            $UsersModel->Nip = $postData['Nip'];
            $UsersModel->Username = $postData['Username'];
            $UsersModel->Password = $postData['Password'];
            $UsersModel->Email = $postData['Email'];
            $UsersModel->Nama = $postData['Nama'];
            $UsersModel->NoHp = $postData['NoHp'];
            $UsersModel->JenisKelamin = $postData['JenisKelamin'];
            $UsersModel->Alamat = $postData['Alamat'];
            $UsersModel->TanggalLahir = $postData['TanggalLahir'];

            if($UsersModel->save()){
                return $this->redirect(['view', 'IdUser' => $UsersModel->IdUser]);
            }
        }else{
            $UsersModel->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $UsersModel,
        ]);
    }

    public function actionUpdate($IdUsers){
        $UsersModel = Users::findOne($IdUsers);

        if ($this->request->isPost) {
            $postData = ($this->request->post())['Users'];

            $UsersModel->IdRole = $postData['IdRole'];
            $UsersModel->Nip = $postData['Nip'];
            $UsersModel->Username = $postData['Username'];
            $UsersModel->Password = $postData['Password'];
            $UsersModel->Email = $postData['Email'];
            $UsersModel->Nama = $postData['Nama'];
            $UsersModel->NoHp = $postData['NoHp'];
            $UsersModel->JenisKelamin = $postData['JenisKelamin'];
            $UsersModel->Alamat = $postData['Alamat'];
            $UsersModel->TanggalLahir = $postData['TanggalLahir'];

            if($UsersModel->save()){
                return $this->redirect(['view', 'IdUser' => $UsersModel->IdUser]);
            }
        }

        return $this->render('update', [
            'model' => $UsersModel,
        ]);
    }

    public function actionDelete($IdUsers){
        Users::findOne($IdUsers)->delete();

        return $this->redirect(['index']);
    }
}