<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Blog */
/* @var $comment app\models\Comment */

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
    <hr>
    <div>
        <?=$this->render('../comment/_form', [
                'model' => $comment,
            ])
        ?>
    </div>
    <div>
        <?php
        foreach ($model->comments as $key => $val)
        {
            ?>
                <div style="border: 1px dotted #3498db; padding: 20px 20px 40px; margin-bottom: 20px;">
                    <p>
                        <b>Комментарий: </b>
                        <?=$val->comment?>
                    </p>
                    <div>
                        <div style="float: left">
                            <b>Пользователь: </b>
                            <?=$val->user->surname . " " . $val->user->name ?>
                        </div>
                        <div style="float: right">
                            <b>Дата создания: </b>
                            <?=$val->create_date?>
                        </div>
                    </div>
                </div>
            <?php
        }
        ?>
    </div>

</div>
