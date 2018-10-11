<html lang="{{ app()->getLocale() }}">
    <head>
         <title>@yield('title') | M'Ka - La Sensación de la Gloria</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <!-- Styles -->
        <link  rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" type="text/css">
         <!--<link  rel="stylesheet" href="{{asset('css/app.css')}}" type="text/css">-->
		<link  rel="stylesheet" href="{{asset('css/bootstrap-datetimepicker.min.css')}}" type="text/css">
		<link  rel="stylesheet" href="{{asset('css/flaticon.css')}}" type="text/css">
        <link  rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}" type="text/css">
        <link  rel="stylesheet" href="{{asset('css/owl.carousel.css')}}" type="text/css">
        <link  rel="stylesheet" href="{{asset('css/responsive.css')}}" type="text/css">
        <link  rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css">
        <link  rel="stylesheet" href="{{asset('css/book/component.css')}}" type="text/css">
        <link  rel="stylesheet" href="{{asset('css/magnific-popup/magnific-popup.css')}}" type="text/css">
        <link  rel="stylesheet" href="{{asset('css/mega-menu/mega_menu.css')}}" type="text/css">
        <link  rel="stylesheet" href="{{asset('revolution/css/navigation.css')}}" type="text/css">
        <link  rel="stylesheet" href="{{asset('revolution/css/settings.css')}}" type="text/css">
     <!-- JS -->
<!-- jquery  -->
<script src="{{asset('js/jquery.min.js')}}"></script>
<!-- j<script src="{{asset('js/app.js')}}"></script>-->
<!-- bootstrap -->
 <script src="{{asset('js/bootstrap.min.js')}}"></script>
<!-- mega menu -->
<script src="{{asset('js/mega-menu/mega_menu.js')}}"></script>
<!-- owl carousel -->
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<!-- appear -->
<script src="{{asset('js/jquery.appear.js')}}"></script>
<!-- counter -->
<script src="{{asset('js/counter/jquery.countTo.js')}}"></script>
<!-- datepicker -->
<script src="{{asset('js/datepicker/bootstrap-datetimepicker.min.js')}}"></script>
<!-- open menu -->
<script src="{{asset('js/book/modernizr.custom.js')}}"></script>
<script src="{{asset('js/book/bookblock.min.js')}}"></script>
<!-- nicescroll -->
<script src="{{asset('js/jquery.nicescroll.min.js')}}"></script>
<!-- select -->
<script src="{{asset('js/jquery-select.js')}}"></script>
<script src="{{asset('js/jasny-bootstrap.min.js')}}"></script>
<!-- REVOLUTION JS FILES -->
<script src="{{asset('revolution/js/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{asset('revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
<!-- SLIDER REVOLUTION 5.0 EXTENSIONS
(Load Extensions only on Local File Systems !
The following part can be removed on Server for On Demand Loading) -->
<script src="{{asset('revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>
<script src="{{asset('revolution/js/extensions/revolution.extension.carousel.min.js')}}"></script>
<script src="{{asset('revolution/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
<script src="{{asset('revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
<script src="{{asset('revolution/js/extensions/revolution.extension.migration.min.js')}}"></script>
<script src="{{asset('revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
<script src="{{asset('revolution/js/extensions/revolution.extension.parallax.min.js')}}"></script>
<script src="{{asset('revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
<script src="{{asset('revolution/js/extensions/revolution.extension.video.min.js')}}"></script>
<!-- SLIDER REVOLUTION CUSTOM  -->
<script src="{{asset('revolution/js/revolution-custom.js')}}"></script>
<!-- custom -->
<script src="{{asset('js/custom.js')}}"></script>
</head>
    <body>
	   @include('theme.nav.nav')
		
       @yield('content')
	   
	   @include('theme.footer.footer')
	  
	</body>
<script type="text/javascript">
    $('[data-toggle="tooltip"], [rel="tooltip"]').tooltip();

    $('#timepicker').datetimepicker({
        pickDate: false,
        pickSeconds: false
    });

    $('#datepickersearch').datetimepicker({
        pickTime: false,
    });
</script>
</html>
