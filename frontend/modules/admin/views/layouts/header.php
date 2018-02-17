<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Modal;
?>
<header>
  <div class="header-row1">
    <div class="container">
      <div class="row">
        <div class="col-12 col-sm-12  col-md-4 col-lg-4 col-xl-4 logo"> <img src="themes/admin/images/logo.png"  alt=""></div>
        <div class="col-12 col-sm-12 col-md-8 col-lg-7 col-xl-6 header-right offset-xl-2 offset-lg-1">
          <div class="top-btn-cont"><i class="fas fa-pencil-alt fa-flip-horizontal"></i> 
            <?= Html::button('Book An Appointment', ['value'=>Url::to('faq/bookotp'),'class' => 'btn contact-btn1','id' =>'modalButton']) ?>
              <a href="#" class="btn contact-btn1 contact-btn2"><i class="fas fa-map-marker-alt"></i> Operational In </a></div>
          <div class="top-contact"> <span> <i class="fas fa-phone fa-flip-horizontal"></i> Call Us Now ! </span> (364) 106-7572 </div>
        </div>
      </div>
    </div>
  </div>
  <div class="header-row2">
    <div class="container">
      <nav id='cssmenu'>
        <div id="head-mobile"> Menu</div>
        <div class="button"></div>
        <ul class="main-menu">
          <li class="active"><a href="index.html" title="Home">Home</a> </li>
          <li><a href="#">What We do </i></a>
            <ul>
              <li> <a href="#">Services 1</a> </li>
              <li><a href="#"> Services 2 </a> </li>
              <li> <a href="#">Services 3</a> </li>
              <li> <a href="#">Services 4 </a> </li>
            </ul>
          </li>
          <li><a href="#"> Testimonials </a> </li>
          <li><a href="#">gallery </a> </li>
          <li><a href="#"> faq </a> </li>
          <li><a href="#"> Contact us </a> </li>
        </ul>
      </nav>
    </div>
  </div>
</header>
 <?php
//    Modal::begin([
//        'header' =>'<h4>Book An Appointment</h4>',
//        'id' => 'modal',
//        'size' =>'modal-lg',
//        
//    ]);
//    echo "<div id='modalContent'></div>";
//    Modal::end();
    ?>