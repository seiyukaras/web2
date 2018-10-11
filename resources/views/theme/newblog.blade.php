@extends('theme.main')
@section('title', 'Listado de Blogs')
@section('content')
 <!--=================================
 intro bg -->

<div class="inner-intro parallax bg-overlay-black-70" style="background-image: url(/images/bg/03.jpg);">
    <div class="container">
        <div class="row text-center intro-title">
            <h1 class="text-orange">Blogs</h1>
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
<section class="page-section-ptb">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center">
                    <div class="title-separator">
                        <i class="glyph-icon flaticon-food-27"></i>
                    </div>
                    <h2 class="text-black"> <span class="text-orange">Listado de</span> Blogs</h2>
                    <p>Puede crear, modificar o eliminar los Blogs!</p>
                </div>
            </div>
        </div>
        <form action="{{ action('BlogController@createBlog')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="contact-form mb-50">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-8">
                    <div class="form-field">
                        <i class="fa fa-pencil"></i>
                        <input type="text" placeholder="Titulo*" class="placeholder" name="titulo" required>
                    </div>
                    <div class="form-field">
                        <i class="fa fa-pencil"></i>
                        <textarea class="input-message placeholder" placeholder="Descripción*" rows="7" name="descripcion" required></textarea>
                    </div>
                    <button type="submit" class="button uppercase"> Crear</button>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                        <div class="fileinput-new thumbnail img-raised">
                            <img src="./images/image_placeholder.jpg" alt="...">
                        </div>
                        <div class="fileinput-preview fileinput-exists thumbnail img-raised"></div>
                        <div>
                            <span class="btn btn-raised btn-round btn-default btn-file" style="background: #e93e21; color: #ffffff;">
                                <span class="fileinput-new">Select image</span>
                                <span class="fileinput-exists">Change</span>
                                <input type="file" name="..." />
                            </span>
                            <a href="#pablo" class="btn btn-round fileinput-exists" style="background: #e93e21; color: #ffffff;" data-dismiss="fileinput">Remove</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </form>
        <div class="table-responsive">
            <table class="table table-hover table-striped border-t-0">
                <thead>
                    <tr>
                        <th>Titulo</th>
                        <th>Fecha creado</th>
                        <th>Acción</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($blogs as $blog)
                        <tr>
                            <td class="align-middle">{{ $blog->titulo }}</td>
                            <td class="align-middle">{{ $blog->getDiaFormat() }}</td>
                            <td class="text-center align-middle">
                                <div class="flex content-between">

                                    <form action="{{action('BlogController@destroy', $blog)}}" method="post">
                                        @csrf
                                        {{ method_field('DELETE') }}
                                        <button data-toggle="tooltip" class="button btn btn-fab btn-round" title="Eliminar blog" onclick="return confirm('Esta seguro que desea eliminar el BLOG?')" type="submit">
                                            <i class="fa fa-trash fa-lg"></i>
                                        </button>
                                    </form>

                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{ $blogs->links() }}
    </div>
</section>
<!--=================================
 reservation --> 
@endsection