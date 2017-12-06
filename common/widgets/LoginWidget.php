<?php

namespace common\widgets;

use Yii;
use yii\base\Widget;
use common\models\LoginForm;
 
class LoginWidget extends Widget {
 
    public function run() {
        if (Yii::$app->user->isGuest) {
            $model = new LoginForm();
            return $this->render('/site/login', [
                'model' => $model,
            ]);
        } 
    }
 
}
