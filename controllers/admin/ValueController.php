<?php

namespace app\controllers\admin;

use Yii;
use app\models\Value;
use yii\web\NotFoundHttpException;

class ValueController extends BehaviorsController
{
    public function actionCreate($project_id = null)
    {
        $model = new Value();
        $model->project_id = $project_id;

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
           //return $this->refresh('/admin/value/create');
            return $this->redirect(['admin/project/view', 'id' => $model->project_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    public function actionUpdate($project_id, $user_id, $role_id)
    {
        $model = $this->findModel($project_id, $user_id, $role_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['admin/project/view', 'id' => $model->project_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    public function actionDelete($project_id, $user_id, $role_id)
    {
        $this->findModel($project_id, $user_id, $role_id)->delete();

        return $this->redirect(['admin/project/view', 'id' => $project_id]);
    }

    protected function findModel($project_id, $user_id, $role_id)
    {
        if (($model = Value::findOne(['project_id' => $project_id, 'user_id' => $user_id,'role_id' => $role_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('Запрашиваемая страница не существует.');
        }
    }
}