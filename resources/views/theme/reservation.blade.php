@extends('theme.main')
@section('title', 'Reservation')
@section('content')
 <!--=================================
 intro bg -->

<div class="inner-intro parallax bg-overlay-black-70" style="background-image: url(images/bg/03.jpg);">
 <div class="container">
    <div class="row text-center intro-title">
      <h1 class="text-orange">Reservation</h1>
      <p class="text-white">Make online reservation</p>
      <ul class="page-breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-double-right"></i></li>
        <li><a href="#">reservation</a> <i class="fa fa-angle-double-right"></i></li>
        <li><span>Reservation form</span></li>
     </ul>
    </div>
  </div>
</div>
 
 <!--=================================
 intro bg -->

<!--=================================
 reservation -->

<section class="reservation">
 <div class="page-section-ptb">
  <div class="container">
   <div class="row">
    <div class="col-lg-12 col-md-12">
      <div class="section-title text-center">
      <div class="title-separator">
     <i class="glyph-icon flaticon-food-27"></i>
      </div>
        <h2> <span class="text-orange">Make </span> Reservation</h2>
        <p>We provide free, secure and instantly confirmed online reservation.</p>
      </div>
    </div>
   </div>
   <div class="row">
    <div class="col-lg-10  col-lg-offset-1">
      <form class="form-horizontal" id="contactform">
         <div class="contact-form">
            <div class="row">
              <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="form-field">
                <i class="fa fa-pencil"></i>
            <input class="web placeholder" type="text" placeholder="Full Name" name="web">
          </div>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="form-field">
                <i class="fa fa-phone"></i>
            <input class="web placeholder" type="text" placeholder="Phone Number" name="web">
          </div>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="form-field">
                <i class="fa fa-envelope-o"></i>
            <input class="web placeholder" type="text" placeholder="Your Email" name="web">
          </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="form-field" id="datepicker">
                <i class="fa fa-calendar add-on"></i>
            <input data-format="yyyy-MM-dd" type="text" placeholder="Select date">
          </div>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="form-field" id="timepicker">
                <i class="fa fa-clock-o icon-time add-on"></i>
            <input data-format="hh:mm:ss" type="text" placeholder="Select time">
          </div>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="form-field">
            <div class="selected-box">
                   <select>
                      <option value="Person">Person</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="2">More then 2</option>
                </select>
                  </div>
                 </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
              <div class="form-field">
               <i class="fa fa-pencil"></i>
                <textarea class="input-message placeholder" placeholder="Comment*" rows="7" name="message"></textarea>  
              </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
              <div class="form-submit mt-10 mb-30 text-center">
                 
                 <button id="submit" name="Submit" type="submit" onclick="return false;" class="button uppercase"> Book A Table</button>
              </div>
              </div>
            </div>
            <div class="bottom-text text-center">You can also call : + <span class="text-orange"><strong> (+53) 22669336</strong></span> to make a reservation.</div>
            </div> 
         </form>
      </div>
   </div>
  </div>
 </div>
</section>

<!--=================================
 reservation --> 
@endsection