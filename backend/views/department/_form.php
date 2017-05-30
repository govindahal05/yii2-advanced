<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;

use backend\models\companies;
use backend\models\branches;

/* @var $this yii\web\View */
/* @var $model backend\models\Departments */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="departments-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'companies_company_id')->dropDownList(ArrayHelper::map(companies::find()->all(),'company_id','company_name'),['prompt'=>'select company']) ?>
    
    
    <?= $form->field($model, 'branches_branch_id')->dropDownList(ArrayHelper::map(branches::find()->all(),'branch_id','branch_name'),['prompt'=>'select company']) ?>


    <?= $form->field($model, 'department_name')->textInput(['maxlength' => true]) ?>



    <?= $form->field($model, 'department_status')->dropDownList([ 'active' => 'Active', 'inactive' => 'Inactive', ], ['prompt' => 'status']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
