<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap4\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\bootstrap4\ActiveForm;
use yii\bootstrap4\Html;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;?>
 <div class="row">
    <div class="col-md-8">
        <div class="site-login col-md-8">
            <h1><?= Html::encode($this->title) ?></h1>

            <p>Please fill out the following fields to login:</p>

            <?php $form = ActiveForm::begin([
                'id' => 'login-form',
                'layout' => 'horizontal',
                'fieldConfig' => [
                    'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
                    'labelOptions' => ['class' => 'col-lg-1 col-form-label'],
                ],
            ]); ?>

                <?= $form->field($model, 'email')->textInput(['autofocus' => true]) ?>

                <?= $form->field($model, 'password')->passwordInput() ?>

                <?= $form->field($model, 'rememberMe')->checkbox([
                    'template' => "<div class=\"offset-lg-1 col-lg-3 custom-control custom-checkbox\">{input} {label}</div>\n<div class=\"col-lg-8\">{error}</div>",
                ]) ?>

                <div class="form-group">
                    <div class="offset-lg-1 col-lg-11">
                        <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                    </div>
                </div>
                
            <?php ActiveForm::end(); ?>

            <div class="offset-lg-1" style="color:#999;">
                You may login with <strong>admin/admin</strong> or <strong>demo/demo</strong>.<br>
                To modify the username/password, please check out the code <code>app\models\User::$users</code>.
            </div>

        </div>
    </div>
    <div class="col-md-2">
                <!-- Put this script tag to the <head> of your page -->
                <script type="text/javascript" src="https://vk.com/js/api/openapi.js?169"></script>
                <script type="text/javascript">
                VK.init({apiId: 7962617});
                </script>

                <!-- VK Widget -->
                <div id="vk_auth"></div>
                <script type="text/javascript">
                VK.Widgets.Auth("vk_auth", {"authUrl":"/auth/login-vk"});
                </script>
    </div>
             
</div>
