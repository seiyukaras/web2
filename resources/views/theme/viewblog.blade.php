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
      <div class="blog-entry mb-50">
          <div class="blog-entry-image">
              <img class="img-responsive" alt="" src="/images_blog/{{$blog->foto}}">
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
            </div>
            <div class="entry-description">
              <p>
                <blockquote>
                {{$blog->descripcion}}
                </blockquote>
              </p>
              <div class="entry-share clearfix">
               <div class="social list-style-none mt-15">
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
        <form class="form-horizontal mt-40" action="{{ action('BlogController@createComments')}}" method="post">
        @csrf
        <input type="hidden" name="blog_id" value="{{$blog->id}}"/>
           <div class="contact-form">
              <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <div class="form-field">
                  <i class="fa fa-user"></i>
                  <input id="name" type="text" placeholder="Nombre*" class="placeholder" name="name">
              </div>
              </div>
              </div>
         <div class="row">
           <div class="col-lg-12">
               <div class="form-field">
               <i class="fa fa-pencil"></i>
                  <textarea class="input-message placeholder" placeholder="Comentario*" rows="7" name="comentario"></textarea>
             </div>
            </div>
          </div>
        <div class="mb-30">
            <button type="submit" class="button uppercase"> Enviar</button>
        </div>
        </div> 
      </form>
    </div>
    <hr>
    <h2 class="text-center mb-80"> <span class="text-orange">{{count($blog->comments)}} </span> Comentario(s)</h2>
    @foreach ($blog->comments as $comm)
    <form class="form-horizontal mt-40" action="{{ action('BlogController@createCommreply')}}" method="post">
        @csrf
        <input type="hidden" name="comments_id" value="{{$comm->id}}"/>
        <input type="hidden" name="blog_id" value="{{$blog->id}}"/>
    <div class="mb-50 col-md-12 media">
                <a class="float-left" href="">
                                        <div class="testimonial-avatar">
                                            <img class="media-object" src="/images/user.png" alt="...">
                                        </div>
                                    </a>
                <h4 class="media-heading">{{$comm->name}} <small>&#xB7; {{$comm->getDateDiferencia()}}</small></h4>
                <h6 class="text-muted"></h6>

                <p>
                  {{$comm->comentario}}
                </p>
                @if (Auth::check() && count($comm->replys) == 0)
                <div class="text-right">
                  <div class="contact-form" style="margin-left: 15%">
                  <div class="form-field">
                    <i class="fa fa-pencil"></i>
                    <textarea class="input-message placeholder" placeholder="Responder Comentario*" rows="7" name="reply" 
                    style="background-size:0 100%,100% 100%;border:0;height:140px;font-size:14px;
                          background-image:linear-gradient(0deg,#9c27b0 2px,rgba(156,39,176,0) 0),linear-gradient(0deg,#d2d2d2 1px,hsla(0,0%,82%,0) 0);"></textarea>
                  </div>
                  </div>
                  <button type="submit" class="button" rel="tooltip" title="Responder al Comentario" style="margin-right: 50px;">
                    <i class="fa fa-reply"></i> Responder
                  </button>
                </div>
                @elseif (count($comm->replys) == 1)
                    <div class="media" style="margin-left: 15%">
                    <a class="float-left" href="">
                                        <div class="testimonial-avatar">
                                            <img class="media-object" src="/images/logo.png" alt="...">
                                        </div>
                                    </a>
                    <h4 class="media-heading">M`ka <small>&#xB7; {{$comm->replys[0]->getDateDiferencia()}}</small></h4>
                    <p>
                        {{$comm->replys[0]->comentario}}
                    </p>
                    </div>
                @endif
              </div>
    </form>
    @endforeach
        </div>
    </div></div>
</section>

 <!--=================================
 blog-page -->
@endsection