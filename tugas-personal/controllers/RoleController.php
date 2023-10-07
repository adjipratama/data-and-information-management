<?php

namespace app\controllers;

use app\models\Role;
use yii\web\Controller;
use yii\filters\VerbFilter;

class RoleController extends Controller
{    
    public function actionIndex(){
        $roleModel = new Role();
        $data = $roleModel->selectAll();

        return $this->render('index', [
            'rolehModel' => $roleModel,
            'data' => $data,
        ]);
    }

    public function actionView($IdRole){
        $data = Role::findOne($IdRole);

        return $this->render('view', [
            'data' => $data,
        ]);
    }

    public function actionCreate(){
        $roleModel = new Role();

        if ($this->request->isPost) {
            $postData = ($this->request->post())['Role'];

            $roleModel->NamaRole = $postData['NamaRole'];
            $roleModel->Keterangan = $postData['Keterangan'];

            if($roleModel->save()){
                return $this->redirect(['view', 'IdRole' => $roleModel->IdRole]);
            }
        }else{
            $roleModel->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $roleModel,
        ]);
    }

    public function actionUpdate($IdRole){
        $roleModel = Role::findOne($IdRole);

        if ($this->request->isPost) {
            $postData = ($this->request->post())['Role'];

            $roleModel->NamaRole = $postData['NamaRole'];
            $roleModel->Keterangan = $postData['Keterangan'];

            if($roleModel->save()){
                return $this->redirect(['view', 'IdRole' => $roleModel->IdRole]);
            }
        }

        return $this->render('update', [
            'model' => $roleModel,
        ]);
    }

    public function actionDelete($IdRole){
        Role::findOne($IdRole)->delete();

        return $this->redirect(['index']);
    }
}