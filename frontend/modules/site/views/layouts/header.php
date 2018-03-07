<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Modal;
?>
<header>
  <div class="header-row1">
    <div class="container">
      <div class="row">
        <div class="col-12 col-sm-12  col-md-4 col-lg-4 col-xl-4 logo"> <img src="themes/site_theme/images/logo.png"  alt=""></div>
        <div class="col-12 col-sm-12 col-md-8 col-lg-7 col-xl-6 header-right offset-xl-2 offset-lg-1">
          <div class="top-btn-cont"><i class="fas fa-pencil-alt fa-flip-horizontal"></i> 
            <?= Html::button('Book An Appointment', ['value'=>Url::to('/bookotp'),'class' => 'btn contact-btn1 modalButton']) ?>
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
          <li class="active"><a href="/" title="Home">Home</a> </li>
          <li><a href="#">What We do </i></a>
            <ul>
              <li> <a href="gift-a-wall">Gift a wall</a> </li>
              <li><a href="royale-play"> Royale play </a> </li>
              <li> <a href="home-makeover">Home makeover</a> </li>
              <li> <a href="general-painting">General painting </a> </li>
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
 