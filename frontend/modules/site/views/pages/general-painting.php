<?php
use yii\helpers\Html;
use yii\bootstrap\Modal;
use yii\helpers\Url;
/* @var $this yii\web\View */

$this->title ='Wall Dressup - General Painting';
?>
<section class="slider-cont inner-page-heading">
  <div class="container">
    <h1>General Painting </h1>
  </div>
</section>
<section class="general-painting1">
  <div class="container">
    <div class="row">
      <div class="col-12 col-sm-12  col-md-12 col-lg-10 col-xl-10 offset-lg-1  offset-xl-1">
        <div class="inner-tab-cont">
          <ul>
            <li> <a href="#1"> <img src="themes/site_theme/images/tab-icon1.png" alt=""> <span> Services </span> </a> </li>
            <li><a href="#2"><img src="themes/site_theme/images/tab-icon2.png" alt=""> <span>Features </span></a> </li>
            <li> <a href="#3"><img src="themes/site_theme/images/tab-icon3.png" alt=""> <span>Pricing </span></a> </li>
          </ul>
        </div>
      </div>
      <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 heading1" id="1">
        <h2> Services</h2>
        <span> General Painting Services </span> </div>
      <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-lg-4 col-xl-4">
        <div class="general-painting-service1"> <a href="#"> <img src="themes/site_theme/images/general-painting-1.jpg"  alt=""> </a>
          <div class="gp-txt1">
            <h2> Interior 
              Wall Paints </h2>
            <p> Lorem ipsum dolor sit amet, 
              consectetur adipiscing elit. Sed vel fringilla magna.</p>
            <p> <a href="#" class="btn btn1 btn1-1"> Explore </a> </p>
          </div>
        </div>
      </div>
      <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-lg-4 col-xl-4">
        <div class="general-painting-service1"> <a href="#"> <img src="themes/site_theme/images/general-painting-2.jpg"  alt=""> </a>
          <div class="gp-txt1">
            <h2> Exterior 
              wall paints </h2>
            <p> Lorem ipsum dolor sit amet, 
              consectetur adipiscing elit. Sed vel fringilla magna.</p>
            <p> <a href="#" class="btn btn1 btn1-1"> Explore </a> </p>
          </div>
        </div>
      </div>
      <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-lg-4 col-xl-4">
        <div class="general-painting-service1"> <a href="#"> <img src="themes/site_theme/images/general-painting-3.jpg"  alt=""> </a>
          <div class="gp-txt1">
            <h2>Metal
              enamel paints </h2>
            <p> Lorem ipsum dolor sit amet, 
              consectetur adipiscing elit. Sed vel fringilla magna.</p>
            <p> <a href="#" class="btn btn1 btn1-1"> Explore </a> </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<div class="gp-features-cont" id="2">
  <div class="container">
    <div class="row">
      <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 heading1">
        <h2> Features</h2>
        <span>Lorem ipsum dolor amet, consectetur </span> </div>
      <div class="col-6 col-sm-6 col-md-3 col-lg-3 col-lg-3 col-xl-3 gp-feature1">
        <p> <img src="themes/site_theme/images/gp-feature1.png" alt=""></p>
        <p> Suspendisse et 
          volutpat massa </p>
      </div>
      <div class="col-6 col-sm-6 col-md-3 col-lg-3 col-lg-3 col-xl-3 gp-feature1">
        <p> <img src="themes/site_theme/images/gp-feature2.png" alt=""></p>
        <p> Proin sed eros <br/>
          vitae dolor </p>
      </div>
      <div class="col-6 col-sm-6 col-md-3 col-lg-3 col-lg-3 col-xl-3 gp-feature1">
        <p> <img src="themes/site_theme/images/gp-feature3.png" alt=""></p>
        <p> Nam semper <br/>
          eleifend est </p>
      </div>
      <div class="col-6 col-sm-6 col-md-3 col-lg-3 col-lg-3 col-xl-3 gp-feature1">
        <p> <img src="themes/site_theme/images/gp-feature3.png" alt=""></p>
        <p>Phasellus <br/>
          vitae nibh vel</p>
      </div>
    </div>
  </div>
</div>
<section class="gp-features-pricing-cont" id="3">
  <div class="container">
    <div class="row">
      <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 heading1">
        <h2> Pricing</h2>
        <span>Lorem ipsum dolor amet, consectetur </span> </div>
      <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 gp-pricing-tab">
        <ul class="nav nav-pills mb-4 mt-2 justify-content-center" id="pills-tab" role="tablist">
          <li class="nav-item"> <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-1" role="tab" aria-controls="pills-1" aria-selected="true">Asian paints</a> </li>
          <li class="nav-item"> <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-2" role="tab" aria-controls="pills-2" aria-selected="false">Nerolac paints</a> </li>
          <li class="nav-item"> <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-3" role="tab" aria-controls="pills-3" aria-selected="false">Berger paints</a> </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
          <div class="tab-pane fade show active" id="pills-1" role="tabpanel" aria-labelledby="pills-home-tab">
            <div class="row">
              <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-lg-3 col-xl-3">
                <div class="gp-pricing-deatils">
                  <div class="gp-pricing-name"> Plan Name1 </div>
                  <div class="gp-pricing-txt">
                    <h5> 10K <br/>
                      <span> Per service</span> </h5>
                    <p> Duis aute irure dolor in reprehen derit in voluptate velit esse cillum dolore eu fugiat Excepteur sint </p>
                  </div>
                </div>
              </div>
              <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-lg-3 col-xl-3">
                <div class="gp-pricing-deatils">
                  <div class="gp-pricing-name"> Plan Name2 </div>
                  <div class="gp-pricing-txt">
                    <h5> 20K <br/>
                      <span> Per service</span> </h5>
                    <p> Duis aute irure dolor in reprehen derit in voluptate velit esse cillum dolore eu fugiat Excepteur sint </p>
                  </div>
                </div>
              </div>
              <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-lg-3 col-xl-3">
                <div class="gp-pricing-deatils">
                  <div class="gp-pricing-name"> Plan Name3 </div>
                  <div class="gp-pricing-txt">
                    <h5> 30K <br/>
                      <span> Per service</span> </h5>
                    <p> Duis aute irure dolor in reprehen derit in voluptate velit esse cillum dolore eu fugiat Excepteur sint </p>
                  </div>
                </div>
              </div>
              <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-lg-3 col-xl-3">
                <div class="gp-pricing-deatils">
                  <div class="gp-pricing-name"> Plan Name4 </div>
                  <div class="gp-pricing-txt">
                    <h5> 40K <br/>
                      <span> Per service</span> </h5>
                    <p> Duis aute irure dolor in reprehen derit in voluptate velit esse cillum dolore eu fugiat Excepteur sint </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="pills-2" role="tabpanel" aria-labelledby="pills-profile-tab">
            <div class="row">
              <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-lg-3 col-xl-3">
                <div class="gp-pricing-deatils">
                  <div class="gp-pricing-name"> Plan Name1 </div>
                  <div class="gp-pricing-txt">
                    <h5> 40K <br/>
                      <span> Per service</span> </h5>
                    <p> Duis aute irure dolor in reprehen derit in voluptate velit esse cillum dolore eu fugiat Excepteur sint </p>
                  </div>
                </div>
              </div>
              <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-lg-3 col-xl-3">
                <div class="gp-pricing-deatils">
                  <div class="gp-pricing-name"> Plan Name2 </div>
                  <div class="gp-pricing-txt">
                    <h5> 30K <br/>
                      <span> Per service</span> </h5>
                    <p> Duis aute irure dolor in reprehen derit in voluptate velit esse cillum dolore eu fugiat Excepteur sint </p>
                  </div>
                </div>
              </div>
              <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-lg-3 col-xl-3">
                <div class="gp-pricing-deatils">
                  <div class="gp-pricing-name"> Plan Name3 </div>
                  <div class="gp-pricing-txt">
                    <h5> 20K <br/>
                      <span> Per service</span> </h5>
                    <p> Duis aute irure dolor in reprehen derit in voluptate velit esse cillum dolore eu fugiat Excepteur sint </p>
                  </div>
                </div>
              </div>
              <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-lg-3 col-xl-3">
                <div class="gp-pricing-deatils">
                  <div class="gp-pricing-name"> Plan Name4 </div>
                  <div class="gp-pricing-txt">
                    <h5> 10K <br/>
                      <span> Per service</span> </h5>
                    <p> Duis aute irure dolor in reprehen derit in voluptate velit esse cillum dolore eu fugiat Excepteur sint </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="pills-3" role="tabpanel" aria-labelledby="pills-contact-tab">
            <div class="row">
              <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-lg-3 col-xl-3">
                <div class="gp-pricing-deatils">
                  <div class="gp-pricing-name"> Plan Name1 </div>
                  <div class="gp-pricing-txt">
                    <h5> 40K <br/>
                      <span> Per service</span> </h5>
                    <p> Duis aute irure dolor in reprehen derit in voluptate velit esse cillum dolore eu fugiat Excepteur sint </p>
                  </div>
                </div>
              </div>
              <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-lg-3 col-xl-3">
                <div class="gp-pricing-deatils">
                  <div class="gp-pricing-name"> Plan Name2 </div>
                  <div class="gp-pricing-txt">
                    <h5> 30K <br/>
                      <span> Per service</span> </h5>
                    <p> Duis aute irure dolor in reprehen derit in voluptate velit esse cillum dolore eu fugiat Excepteur sint </p>
                  </div>
                </div>
              </div>
              <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-lg-3 col-xl-3">
                <div class="gp-pricing-deatils">
                  <div class="gp-pricing-name"> Plan Name3 </div>
                  <div class="gp-pricing-txt">
                    <h5> 20K <br/>
                      <span> Per service</span> </h5>
                    <p> Duis aute irure dolor in reprehen derit in voluptate velit esse cillum dolore eu fugiat Excepteur sint </p>
                  </div>
                </div>
              </div>
              <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-lg-3 col-xl-3">
                <div class="gp-pricing-deatils">
                  <div class="gp-pricing-name"> Plan Name4 </div>
                  <div class="gp-pricing-txt">
                    <h5> 10K <br/>
                      <span> Per service</span> </h5>
                    <p> Duis aute irure dolor in reprehen derit in voluptate velit esse cillum dolore eu fugiat Excepteur sint </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php echo $this->render('@frontend/modules/site/views/partials/_gift_a_wall_gallery'); ?> 
<?php echo $this->render('@frontend/modules/site/views/partials/_testimonials_'); ?> 

<div class="pricing-calculator-btn"> <a href="#" data-toggle="modal" data-target="#exampleModalCenter">
  <img src="themes/site_theme/images/pricing-calculator-btn.png" alt="" class="pc1"> </a>
  <a href="#" data-toggle="modal" data-target="#exampleModalCenter"> 
  <img src="themes/site_theme/images/pricing-calculator-btn2.png" alt="" class="pc2"> </a>
</div>

<div class="modal fade bd-example-modal-lg pricingcalc1" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLongTitle">General Painting Calculator</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
    </div>
    <div class="modal-body">
      <div class="form-group ">
        <div class="row mb-4">
          <div class="col-12 col-sm-5 col-md-3 col-lg-3 col-xl-2">
            <label> Project Name </label>
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
                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"> Interior </button>
                  </h5>
                </div>
                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
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
                            <th scope="row" align="center"><div class="custom-control custom-radio">
                                <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                                <label class="custom-control-label" for="customRadio1"></label>
                              </div></th>
                            <td><div class="custom-control custom-radio">
                                <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                <label class="custom-control-label" for="customRadio2"></label>
                              </div></td>
                            <td><input name="" type="text" class="form-control"></td>
                            <td><input name="" type="text" class="form-control"></td>
                            <td><select class="custom-select">
                                <option selected>Select</option>
                                <option value="1">Asian Paints</option>
                              </select></td>
                            <td class="text-center"><b> ₹ 15</b></td>
                            <td><b> ₹ 2000</b></td>
                          </tr>
                        </tbody>
                      </table>
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
                            <td><input name="" type="text" class="form-control"></td>
                            <td><input name="" type="text" class="form-control"></td>
                            <td><select class="custom-select">
                                <option selected>Select</option>
                                <option value="1">Asian Paints</option>
                              </select></td>
                            <td class="text-center"><b> ₹ 15</b></td>
                            <td><b> ₹ 2000</b></td>
                          </tr>
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
                          <td class="text-center"><b> ₹ 15</b></td>
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
           <?= Html::submitButton('Mail me', ['class' => 'btn btn1']) ?>
      </div>
    </div>
  </div>
</div>
</div>

