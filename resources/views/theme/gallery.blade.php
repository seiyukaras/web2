@extends('theme.main')
@section('title', 'Gallery')
@section('content')
 <!--=================================
 intro bg -->

<div class="inner-intro parallax bg-overlay-black-70" style="background-image: url(images/bg/02.jpg);">
  <div class="container">
     <div class="row text-center intro-title">
        <h1 class="text-orange">Gallery< M'ka/h1>
        <p class="text-white">We Know The Secret Of Your Success</p>
        <ul class="page-breadcrumb">
          <li><a href="#"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-double-right"></i></li>
          <li><a href="#">pages</a> <i class="fa fa-angle-double-right"></i></li>
          <li><span>gallery 4 column</span></li>
       </ul>
     </div>
  </div> 
</div>

 <!--=================================
 intro bg -->
 
<!--=================================
 gallery -->
 
 <section class="gallery white-bg page-section-ptb">
  <div class="container">
   <div class="row">
    <div class="col-lg-12 col-md-12">
       <div class="isotope-filters">
        <button data-filter="" class="active">All</button>
        <button data-filter=".vegetarian"> Vegetarian</button>
        <button data-filter=".chinese">Chinese</button>
        <button data-filter=".italian">Italian</button>
        <button data-filter=".mexican">Mexican</button>
       </div>
      </div>
     </div>
     </div>
   <div class="container"> 
 <div class="isotope popup-gallery columns-4">
   <div class="grid-item chinese mexican">
      <div class="galllery-item">
        <span><img class="img-responsive" src="images/gallery/01.jpg" alt=""></span>
         <div class="overlay">
          <div class="overlay-content">
             <h3> <a href="#"> Cheese Pasta </a> </h3>
              <a href="#">Branding</a>/
              <a href="#">Identity</a>
             <a class="portfolio-img" href="images/gallery/01.jpg"><i class="fa fa-expand"></i></a>               
              </div>
           </div>
        </div>
    </div>
    <div class="grid-item chinese">
      <div class="galllery-item">
        <span><img class="img-responsive" src="images/gallery/02.jpg" alt=""></span>
         <div class="overlay">
          <div class="overlay-content">
            <h3> <a href="#"> Cheese Pasta </a> </h3>
              <a href="#">Branding</a>/
              <a href="#">Identity</a>
             <a class="portfolio-img" href="images/gallery/02.jpg"><i class="fa fa-expand"></i></a>               
              </div>
           </div>
        </div>
    </div>
     <div class="grid-item  vegetarian italian">
        <div class="galllery-item">
        <span><img class="img-responsive" src="images/gallery/03.jpg" alt=""></span>
         <div class="overlay">
          <div class="overlay-content">
           <h3> <a href="#"> Cheese Pasta </a> </h3>
              <a href="#">Branding</a>/
              <a href="#">Identity</a>
             <a class="portfolio-img" href="images/gallery/03.jpg"><i class="fa fa-expand"></i></a>               
              </div>
           </div>
        </div>  
    </div>
    <div class="grid-item mexican">
      <div class="galllery-item">
        <span><img class="img-responsive" src="images/gallery/04.jpg" alt=""></span>
         <div class="overlay">
          <div class="overlay-content">
           <h3> <a href="#"> Cheese Pasta </a> </h3>
              <a href="#">Branding</a>/
              <a href="#">Identity</a>
             <a class="portfolio-img" href="images/gallery/04.jpg"><i class="fa fa-expand"></i></a>               
              </div>
           </div>
        </div>
    </div>
    <div class="grid-item  vegetarian chinese">
      <div class="galllery-item">
        <span><img class="img-responsive" src="images/gallery/05.jpg" alt=""></span>
         <div class="overlay">
          <div class="overlay-content">
          <h3> <a href="#"> Cheese Pasta </a> </h3>
                <a href="#">Branding</a>/
                <a href="#">Identity</a>
             <a class="portfolio-img" href="images/gallery/05.jpg"><i class="fa fa-expand"></i></a>               
              </div>
           </div>
        </div>  
    </div>
    <div class="grid-item  vegetarian">
      <div class="galllery-item">
        <span><img class="img-responsive" src="images/gallery/06.jpg" alt=""></span>
         <div class="overlay">
          <div class="overlay-content">
            <h3> <a href="#"> Cheese Pasta </a> </h3>
              <a href="#">Branding</a>/
              <a href="#">Identity</a>
             <a class="portfolio-img" href="images/gallery/06.jpg"><i class="fa fa-expand"></i></a>               
              </div>
           </div>
        </div>
    </div>
    <div class="grid-item">
      <div class="galllery-item">
        <span><img class="img-responsive" src="images/gallery/07.jpg" alt=""></span>
         <div class="overlay">
          <div class="overlay-content">
           <h3> <a href="#"> Cheese Pasta </a> </h3>
              <a href="#">Branding</a>/
              <a href="#">Identity</a>
             <a class="portfolio-img" href="images/gallery/07.jpg"><i class="fa fa-expand"></i></a>               
              </div>
           </div>
        </div> 
    </div>
      <div class="grid-item  vegetarian italian">
        <div class="galllery-item">
        <span><img class="img-responsive" src="images/gallery/08.jpg" alt=""></span>
         <div class="overlay">
          <div class="overlay-content">
            <h3> <a href="#"> Cheese Pasta </a> </h3>
              <a href="#">Branding</a>/
              <a href="#">Identity</a>
             <a class="portfolio-img" href="images/gallery/08.jpg"><i class="fa fa-expand"></i></a>               
              </div>
           </div>
        </div>  
    </div>
     <div class="grid-item chinese">
        <div class="galllery-item">
        <span><img class="img-responsive" src="images/gallery/09.jpg" alt=""></span>
         <div class="overlay">
          <div class="overlay-content">
            <h3> <a href="#"> Cheese Pasta </a> </h3>
              <a href="#">Branding</a>/
              <a href="#">Identity</a>
             <a class="portfolio-img" href="images/gallery/09.jpg"><i class="fa fa-expand"></i></a>               
              </div>
           </div>
        </div>
    </div>
     <div class="grid-item chinese">
       <div class="galllery-item">
        <span><img class="img-responsive" src="images/gallery/10.jpg" alt=""></span>
         <div class="overlay">
          <div class="overlay-content">
            <h3> <a href="#"> Cheese Pasta </a> </h3>
              <a href="#">Branding</a>/
              <a href="#">Identity</a>
             <a class="portfolio-img" href="images/gallery/10.jpg"><i class="fa fa-expand"></i></a>               
              </div>
           </div>
        </div> 
    </div>
    <div class="grid-item chinese">
       <div class="galllery-item">
        <span><img class="img-responsive" src="images/gallery/11.jpg" alt=""></span>
         <div class="overlay">
          <div class="overlay-content">
            <h3> <a href="#"> Cheese Pasta </a> </h3>
              <a href="#">Branding</a>/
              <a href="#">Identity</a>
             <a class="portfolio-img" href="images/gallery/11.jpg"><i class="fa fa-expand"></i></a>               
              </div>
           </div>
        </div> 
    </div>
    <div class="grid-item chinese">
       <div class="galllery-item">
        <span><img class="img-responsive" src="images/gallery/12.jpg" alt=""></span>
         <div class="overlay">
          <div class="overlay-content">
            <h3> <a href="#"> Cheese Pasta </a> </h3>
              <a href="#">Branding</a>/
              <a href="#">Identity</a>
             <a class="portfolio-img" href="images/gallery/12.jpg"><i class="fa fa-expand"></i></a>               
              </div>
           </div>
        </div> 
    </div>
   </div>
 </div>
 </section>

 <!--=================================
 gallery --> 
@endsection