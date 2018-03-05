<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\web\View;
use yii\widgets\DetailView;
?>
<section class="slider-cont inner-page-heading">
    <div class="container">
        <h1>General Painting Calculator</h1>
    </div>
</section>
<section class="royal-play-cont"> 

    <div class="container"> 
        <div class="pricingcalc1">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">General Painting Calculator</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group ">
                            <div class="row mb-4">
                                <div class="col-12 col-sm-5 col-md-3 col-lg-3 col-xl-2">
                                    <label> Project Name </label><span class="required-field">*</span>
                                </div>
                                <div class="col-12 col-sm-5 col-md-4 col-lg-4 col-xl-4">
                                    <input name="" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                    <div id="accordion">
                                        <div class="card">
                                            <div class="card-header" id="headingOne">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" > Interior </button>
                                                </h5>
                                            </div>
                                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                                <div class="card-body">
                                                    <div class="table-responsive">
                                                        <form name="general-painting-validate" id="general-painting-validate" method="post" action="">
                                                        <table class="table table-bordered">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col" class="text-center" style="width:120px">Fresh Paint</th>
                                                                    <th scope="col">Repaint</th>
                                                                    <th scope="col">Room Name</th>
                                                                    <th scope="col">Approx sq.ft</th>
                                                                    <th scope="col" style="width:150px">Paint</th>
                                                                    <th scope="col">Rate.sq.ft</th>
                                                                    <th scope="col">Amount</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <th scope="row" align="center"><div class="custom-control custom-radio">
                                                                            <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input interior-fresh-paint" >
                                                                            <label class="custom-control-label" for="customRadio1" ></label>
                                                                        </div></th>
                                                                    <td><div class="custom-control custom-radio">
                                                                            <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                                                            <label class="custom-control-label" for="customRadio2"></label>
                                                                        </div></td>
                                                                    <td><input name="" type="text" class="form-control" id="int-room-name"></td>
                                                                    <td><input name="" type="text" class="form-control" id="int-appr-sqft"></td>
                                                                    <td><select class="custom-select" id="general-select">
                                                                            <!--<option selected>Select</option>-->
                                                                            <!--<option value="1">Asian Paints</option>-->
                                                                        </select>
                                                                        <select class="custom-select" id="int-fresh-paint" style="display:none">
                                                                            <option selected>Select</option>
                                                                            <option value="Asian Paints Tractor Emulsion" data-price="21">Asian Paints Tractor Emulsion</option>
                                                                            <option value="Asian Paints Apcolite Premium Emulsion" data-price="24">Asian Paints Apcolite Premium Emulsion</option>
                                                                            <option value="Asian Paints Apcolite Advance Matt Emulsion" data-price="26">Asian Paints Apcolite Advance Matt Emulsion</option>
                                                                            <option value="Asian Paints Royale Luxury Emulsion" data-price="30">Asian Paints Royale Luxury Emulsion</option>
                                                                            <option value="Asian Paints Royale ATMOS" data-price="32">Asian Paints Royale ATMOS</option>
                                                                            <option value="Asian Paints Royale ASPIRA" data-price="35">Asian Paints Royale ASPIRA </option>
                                                                        </select>
                                                                        <select class="custom-select" id="int-re-paint" style="display:none">
                                                                            <option selected>Select</option>
                                                                            <option value="Asian Paints Tractor Emulsion" data-price="8">Asian Paints Tractor Emulsion</option>
                                                                            <option value="Asian Paints Apcolite Premium Emulsion" data-price="11">Asian Paints Apcolite Premium Emulsion</option>
                                                                            <option value="Asian Paints Apcolite Advance Matt Emulsion" data-price="15">Asian Paints Apcolite Advance Matt Emulsion</option>
                                                                            <option value="Asian Paints Royale Luxury Emulsion" data-price="19">Asian Paints Royale Luxury Emulsion</option>
                                                                            <option value="Asian Paints Royale ATMOS" data-price="20">Asian Paints Royale ATMOS</option>
                                                                            <option value="Asian Paints Royale ASPIRA" data-price="22">Asian Paints Royale ASPIRA</option>
                                                                        </select>
                                                                    </td>
                                                                    <td class="text-center" id="general-rate"><b><span id="price"></span> </b></td>
                                                                    <td id="general-amount"><b> </b></td>
                                                                </tr>
                                                                <div class="form-group">   
                                                                    <button type="button" class="btn btn-dark add-row-button" id="add-row-button"><i class="fas fa-plus "> </i> Add Row</button>
                                                                </div>
                                                            </tbody>
                                                        </table>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="headingTwo">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"> Exterior </button>
                                                </h5>
                                            </div>
                                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                                <div class="card-body">
                                                    <div class="table-responsive">
                                                        <table class="table table-bordered">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col" class="text-center" style="width:120px">Fresh Paint</th>
                                                                    <th scope="col">Repaint</th>
                                                                    <th scope="col">Room Name</th>
                                                                    <th scope="col">Approx sq.ft</th>
                                                                    <th scope="col" style="width:150px">Paint</th>
                                                                    <th scope="col">Rate.sq.ft</th>
                                                                    <th scope="col">Amount</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <th scope="row" align="center"> <div class="custom-control custom-radio">
                                                                            <input type="radio" id="customRadio3" name="customRadio" class="custom-control-input">
                                                                            <label class="custom-control-label" for="customRadio3"></label>
                                                                        </div></th>
                                                                    <td><div class="custom-control custom-radio">
                                                                            <input type="radio" id="customRadio4" name="customRadio" class="custom-control-input">
                                                                            <label class="custom-control-label" for="customRadio4"></label>
                                                                        </div></td>
                                                                    <td><input name="" type="text" class="form-control" id="ext-room-name"></td>
                                                                    <td><input name="" type="text" class="form-control" id="ext-appr-sqft"></td>
                                                                    <td><select class="custom-select" id="general-select2">
                                                                            <!--                                                                            <option selected>Select</option>
                                                                                                                                                        <option value="1">Asian Paints</option>-->
                                                                        </select>
                                                                        <select class="custom-select" id="ext-fresh-paint" style="display:none">
                                                                            <option selected>Select</option>
                                                                            <option value="Asian Paints Ace" data-price="14">Asian Paints Ace</option>
                                                                            <option value="Asian Paints Apex" data-price="16">Asian Paints Apex</option>
                                                                            <option value="Asian Paints Apex Ultima" data-price="21">Asian Paints Apex Ultima </option>
                                                                            <option value="asian paints ultima protek" data-price="34">asian paints ultima protek</option>
                                                                        </select>
                                                                        <select class="custom-select" id="ext-re-paint" style="display:none">
                                                                            <option selected>Select</option>
                                                                            <option value="Asian Paints Ace" data-price="11">Asian Paints Ace</option>
                                                                            <option value="Asian Paints Apex" data-price="14">Asian Paints Apex</option>
                                                                            <option value="Asian Paints Apex Ultima" data-price="17">Asian Paints Apex Ultima</option>
                                                                            <option value="Asian Paints Apex Ultima protek" data-price="22">Asian Paints Apex Ultima protek</option>
                                                                        </select>

                                                                    </td>
                                                                    <td class="text-center" id="general-rate2"><b><span id="price"></span></b></td>
                                                                    <td id="general-amount2"><b> </b></td>
                                                                </tr>
                                                                <div class="form-group">   
                                                                    <button type="button" class="btn btn-dark add-row-button" id="add-row-button2"><i class="fas fa-plus "> </i> Add Row</button>
                                                                </div>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="headingThree">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"> Wood </button>
                                                </h5>
                                            </div>
                                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                                <div class="card-body">
                                                    <table class="table table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col" class="text-center">Enamel</th>
                                                                <th scope="col" class="text-center">Polish</th>
                                                                <th scope="col">Type</th>
                                                                <th scope="col" style="width:150px">No.of 
                                                                    Door </th>
                                                                <th scope="col">Rate.sq.ft</th>
                                                                <th scope="col">Amount</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td><div class="custom-control custom-radio">
                                                                        <input type="radio" id="customRadio5" name="customRadio" class="custom-control-input">
                                                                        <label class="custom-control-label" for="customRadio5"></label>
                                                                    </div></td>
                                                                <td><div class="custom-control custom-radio">
                                                                        <input type="radio" id="customRadio6" name="customRadio" class="custom-control-input">
                                                                        <label class="custom-control-label" for="customRadio6"></label>
                                                                    </div></td>
                                                                <td><div class="custom-control custom-checkbox">
                                                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                                        <label class="custom-control-label" for="customCheck1">Door</label>
                                                                    </div></td>
                                                                <td><input name="" type="text" class="form-control"></td>
                                                                <td class="text-center"><b> </b></td>
                                                                <td><b> ₹ 2000</b></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-right total1">
                                        Total :  <span class="badge badge-secondary"> ₹ 2000</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer text-center">
                            <button type="button" class="btn btn2">Book An Appointment</button>
                            <button type="button" class="btn btn1">Mail me</button>
                            <?php // Html::submitButton('Mail me', ['class' => 'btn btn1']) ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    $mailme = Yii::$app->getUrlManager()->createUrl("site/site/mailme");

    $script = <<< JS

    
jQuery(document).ready(function () {
        
       
                $('#mailme-id').click(function() {
                $("#mailme-show").show(); 
        
                });
        
                            
          //_____
                

        $('#customRadio1').change(function(){
             $("#int-fresh-paint").show();                        
             $("#general-select").hide();
             $("#int-re-paint").hide();
                 $("#general-rate").html("");
                $("#general-amount").html("");
                $("#int-appr-sqft").val("");
                 $('#int-fresh-paint').change(function() {
                 var pr = $(this).find(':selected').attr("data-price");
                 console.log(pr);
                 $("#general-rate").html(pr);
                $("#int-appr-sqft").val();
                var total_amount = ($("#int-appr-sqft").val())  *  $("#general-rate").html();
                $('#general-amount').html(total_amount);
                });
                });
              
        $('#customRadio2').change(function() {
             $("#int-re-paint").show(); 
             $("#general-select").hide();  
             $("#int-fresh-paint").hide(); 
                $("#general-rate").html("");
                $("#general-amount").html("");
                 $("#int-appr-sqft").val("");
                $('#int-re-paint').change(function() {
                var pr = $(this).find(':selected').attr("data-price");
                console.log(pr);
                $("#general-rate").html(pr);
                $("#int-appr-sqft").val();
                var total_amount = ($("#int-appr-sqft").val())  *  $("#general-rate").html();
                $('#general-amount').html(total_amount);
                
              });
              });
                
            $( "#int-appr-sqft" ).keyup(function() {
                 var dInput = $(this).val();
                 var rate = $('#general-rate').text();
                 var total_amount = dInput * rate;
                 $('#general-amount').html(total_amount);
        
              });
                
                
        
        $('#customRadio3').change(function(){
             $("#ext-fresh-paint").show();                        
             $("#general-select2").hide();
             $("#ext-re-paint").hide();
                 $("#general-amount2").html("");
                 $("#ext-appr-sqft").val("");
                 $("#general-rate2").html("");
                 $('#ext-fresh-paint').change(function() {
                 var pr = $(this).find(':selected').attr("data-price");
                 console.log(pr);
                 $("#general-rate2").html(pr);
                $("#ext-appr-sqft").val();
                var total_amount = ($("#ext-appr-sqft").val())  *  $("#general-rate2").html();
                $('#general-amount2').html(total_amount);
                
                });
                });
                
        $('#customRadio4').change(function() {
             $("#ext-re-paint").show(); 
             $("#general-select2").hide();  
             $("#ext-fresh-paint").hide(); 
                $("#general-rate2").html("");
                $("#general-amount2").html("");
                $("#ext-appr-sqft").val("");
                $('#ext-re-paint').change(function() {
                var pr = $(this).find(':selected').attr("data-price");
                console.log(pr);
                $("#general-rate2").html(pr);
                 $("#ext-appr-sqft").val();
                var total_amount = ($("#ext-appr-sqft").val())  *  $("#general-rate2").html();
                $('#general-amount2').html(total_amount);
              });
              });
   
        $("#ext-appr-sqft").keyup(function() {
                 var dInput = $(this).val();
                 var rate2 = $('#general-rate2').html();
                 var total_amount = dInput * rate2;
                 $('#general-amount2').html(total_amount);
        
              });
   //_______
   
            
            
             $("#general-painting-validate").validate({
        rules: {
		'email': {
                required: true,
                email: true,
                 },
                'name': {
                required: true,
		},
                'room-name':{
                    required:true,
                },
                
           },
        messages: {
                'name': {
		required :"Please Enter Your Name",
		},
		'room-name':{
		required: "Please Enter Room Name",
		},
                'email': "Please Enter Valid Email Address",
               
            },
             
       submitHandler: function(form) {
         
                var room = $('#room-namet').val();
                var rate = $('#home-rate').val();
                var plan = $('#home-makeover-select').val();
                var n = $('#name').val();
                var e = $('#email').val();
                
            $.ajax({
       
                type: 'GET',
                url: '{$mailme}',
                data:{
                    room1:room, rate1:rate, plan1:plan, n1:n, e1:e, 
                    form: 'home',
                     },
                success: function(data) {
                if(data == 'success'){
                alert('finish');
                $("#successMessage").html( 'Your request has been send sucessfully!!' );
                }
                
                }
            });
               
           }     
      });
            
            
            
            //_______
   });
         
                
                
                
                
JS;
    $this->registerJs($script, View::POS_END);
    ?>

