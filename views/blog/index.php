<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $searchModel app\models\BlogSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Все записи блога';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="blog-index">

    <?= \yii\widgets\ListView::widget([
             'dataProvider' => $dataProvider,
             'itemOptions' => ['class' => 'list-view'],
             'itemView' => function ($model, $key, $index, $widget) {
                 return
                     "<a href='/blog/view/?id=$model->id'><div style='margin: 40px; display: inline-block'>" .
                        "<div style='width: 300px; float: left; margin-right: 30px;'>
                            <img src='/$model->image' style='max-width:300px'>
                        </div>" .
                        Html::a(Html::encode($model->description), ['view', 'id' => $model->id]) .
                     "</div></a>
                     <hr>";
             },
         ])
    ?>

</div>
