<?php
use yii\helpers\Html;
use yii\grid\GridView;
use yii\bootstrap\Modal;
use yii\helpers\Url;
/* @var $this yii\web\View */

$this->title = 'Painting Tool';
?>
<div class="site-index">
 <p class="pull-right"><?= Html::button('Book An Appointment', ['value'=>Url::to('faq/bookotp'),'class' => 'btn btn-success','id' =>'modalButton']) ?> </p>
 <?php
    Modal::begin([
        'header' =>'<h4>Book An Appointment</h4>',
        'id' => 'modal',
        'size' =>'modal-lg',
        
    ]);
    echo "<div id='modalContent'></div>";
    Modal::end();
    ?>
    <div class="jumbotron">
        <br><br>
        <h1>Painting Tool!</h1>


    </div>

   
</div>
