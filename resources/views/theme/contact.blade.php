@extends('theme.main')
@section('title', 'Contact')
@section('content')
<!--=================================
 intro bg -->

<div class="inner-intro parallax bg-overlay-black-70" style="background-image: url(images/bg/03.jpg);">
   <div class="container">
     <div class="row text-center intro-title">
      <h1 class="text-orange">Contact Us</h1>
      <p class="text-white">We Know The Secret Of Your Success</p>
      <ul class="page-breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-double-right"></i></li>
        <li><a href="#">pages</a> <i class="fa fa-angle-double-right"></i></li>
        <li><span>Contact</span></li>
     </ul>
     </div>
  </div>
</div>
 
<!--=================================
 intro bg -->


<!--=================================
  contact -->

<section class="contact white-bg page-section-ptb"> 
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="section-title text-center">
        <div class="title-separator">
           <i class="glyph-icon flaticon-food-27"></i>
         </div>
          <h2> <span class="text-orange">Contact </span> Us</h2>
          <p>It would be great to hear from you! If you got any questions</p>
        </div>
      </div>
     </div>
     <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-3">
         <div class="contact-box text-center">
            <i class="fa fa-map-marker"></i>
            <h5>Address</h5>
            <p>1234 North Avenue Luke, IN 360001</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3">
         <div class="contact-box text-center">
            <i class="fa fa-phone"></i>
            <h5>Phone</h5>
            <p>(+53) 22669336</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3">
         <div class="contact-box text-center">
            <i class="fa fa-envelope-o"></i>
            <h5>Email</h5>
            <p> support@website.com</p>
          </div>
        </div>
 
      </div>
      <div class="row mt-30">
        <div class="col-lg-12">
        <div id="formmessage">Success/Error Message Goes Here</div>
         <form class="form-horizontal" id="contactform" role="form" method="post" action="http://sizzlespicekent.com/php/contact-form.php">
           <div class="contact-form">
              <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <div class="form-field">
                  <i class="fa fa-user"></i>
                  <input id="name" type="text" placeholder="Name*" class="placeholder" name="name">
              </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <div class="form-field">
                  <i class="fa fa-phone"></i>
                 <input type="text" placeholder="Phone*" class="placeholder" name="phone">
               </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <div class="form-field">
                  <i class="fa fa-envelope-o"></i>
               <input type="email" placeholder="Email*" class="placeholder" name="email">
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
              <div class="form-submit mt-10 text-center">
                   <input type="hidden" name="action" value="sendEmail"/>
                   <button id="submit" name="Submit" type="submit" value="Send" class="button"> Send Message</button>
                </div>
              </div> 
            </form>
          <div id="ajaxloader" style="display:none"><img class="center-block" src="images/ajax-loader.gif" alt=""></div> 
        </div>
      </div>
    </div>
 </section>

 <!--=================================
  contact -->

 <!--=================================
  contact-map -->

<section class="contact-map">
  <div class="container-fluid">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3224.017231421863!2d-79.43780268425046!3d36.09306798010035!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88532bae09664ccb%3A0xaa6b8f98d3fb8135!2s220+E+Front+St%2C+Burlington%2C+NC+27215%2C+USA!5e0!3m2!1sen!2sin!4v1475045272926" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen=""></iframe>
  </div>
 </section>
 
 <!--=================================
  contact-map -->
 
@endsection