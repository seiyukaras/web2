@extends('theme.main')
@section('title', 'Blog')
@section('content')
 
 <!--=================================
 intro bg -->

<div class="inner-intro parallax bg-overlay-black-70" style="background-image: url(images/bg/09.jpg);">
  <div class="container">
    <div class="row text-center intro-title">
      <h1 class="text-orange">blog masonry</h1>
      <p class="text-white">We Know The Secret Of Your Success</p>
      <ul class="page-breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-double-right"></i></li>
        <li><a href="#">blog</a> <i class="fa fa-angle-double-right"></i></li>
        <li><span>blog masonry right sidebar</span></li>
      </ul>
    </div>
  </div>
</div>
 
 <!--=================================
 intro bg -->

 <!--=================================
 blog-page -->

<section class="blog blog-page page-section-ptb">
 <div class="container">
     <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
         @foreach($blogs as $blog)
         <div class="blog-entry border mb-50">
          <div class="blog-entry-image">
            <img class="img-responsive" alt="" src="images_blog/{{$blog->foto}}">
            <div class="entry-date">
              {{date('d',strtotime($blog->created_at))}}<span>{{date('M',strtotime($blog->created_at))}}</span>
            </div>
          </div>
          <div class="entry-content">
            <div class="entry-title">
              <h3><a href="blog-single.html">{{$blog->titulo}}</a></h3>
            </div>
            <div class="entry-meta">
            <a href="#"><i class="fa fa-user"></i> Por M`ka</a>
            <a href="#"><i class="fa fa-comments-o"></i> {{count($blog->comments)}} Comentarios</a>
            <a href="#"><i class="fa fa-tags"></i> Comida </a>
          </div>
          <div class="entry-description">
            <p>{{$blog->getDescrip300()}}</p> 
          </div>
          <div class="entry-share clearfix">
               <div class="entry-button">
               <a class="button-arrow" href="{{route('viewBlog', ['id' => $blog->id])}}">Leer Mas<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
             </div>  
             <div class="social list-style-none pull-right">
                <strong>Share : </strong>
                <ul>
                  <li><a href="#"> <i class="fa fa-facebook"></i> </a></li>
                  <li><a href="#"> <i class="fa fa-twitter"></i> </a></li>
                  <li><a href="#"> <i class="fa fa-pinterest-p"></i> </a></li>
                  <li><a href="#"> <i class="fa fa-dribbble"></i> </a></li>
                </ul>
             </div>
           </div>
          </div>
        </div>
        @endforeach
 <!-- =======  pagination  ========== -->
        {{ $blogs->links() }}
      </div>
    </div>
 </div>
</section>

 <!--=================================
 blog-page -->
@endsection