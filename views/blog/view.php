<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Blog */

$this->title = $model->description;
$this->params['breadcrumbs'][] = ['label' => 'Все статьи', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="blog-view">
    <?php
    if($model->user_id == Yii::$app->user->id)
    {
        ?>
        <p>
            <?= Html::a('Изменить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        </p>
        <?php
    }
    ?>
    <hr>
    <h1><?=$model->description?></h1>
    <div style="display: inline-block; vertical-align: top;">
        <img src="/<?=$model->image?>" style="max-width: 300px; float: left; margin-right: 30px;">
        <span><?=$model->article?></span>
    </div>
    <div style="margin: 20px">
        <b>Автор:</b> <?=$model->user->surname . ' ' . $model->user->name ?>
    </div>

</div>
