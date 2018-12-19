<!doctype html>
<html class="no-js" lang="zxx">
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Dilan - eCommerce HTML5 Template</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" type="image/x-icon" href="{{url('public')}}/assets/img/favicon.png">
	<link rel="stylesheet" href="{{url('public')}}/assets/css/bootstrap.min.css">
	{{-- <link rel="stylesheet" href="{{url('public')}}/assets/css/animate.css"> --}}
	{{-- <link rel="stylesheet" href="{{url('public')}}/assets/css/owl.carousel.min.css"> --}}
	{{-- <link rel="stylesheet" href="{{url('public')}}/assets/css/chosen.min.css"> --}}
	{{-- <link rel="stylesheet" href="{{url('public')}}/assets/css/magnific-popup.css"> --}}
	<link rel="stylesheet" href="{{url('public')}}/assets/css/ionicons.min.css">
	<link rel="stylesheet" href="{{url('public')}}/assets/css/meanmenu.min.css">
	<link rel="stylesheet" href="{{url('public')}}/assets/css/responsive.css">
	<link rel="stylesheet" href="{{url('public')}}/assets/css/style1.css">
	<script src="{{url('public')}}/assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>
<body>
	<header class="header-area transparent-bar padding-width-1 clearfix">
		<div class="container-fluid">
			<div class="header-top ptb-15">
				<div class="row">
					<div class="col-lg-6 col-md-4 col-12">
						<div class="logo logo-pading">
							<a href="{{route('homenm')}}"><img src="{{url('public')}}/assets/img/logo/logo.png"></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<div class="container">
		@if(Session::has('error'))
		<div class="alert alert-danger" id="success-alert" role="alert">
			<a href="#" class="alert-link"><strong>{!! Session::get('error') !!}</strong> </a>.
		</div>
		@endif
		@if(Session::has('success'))
		<div class="alert alert-success" id="success-alert" role="alert">
			<a href="#" class="alert-link"><strong>{!! Session::get('success') !!}</strong> </a>.
		</div>
		@endif
	</div>

	@yield('backend')



	
	<script src="{{url('public')}}/assets/js/vendor/jquery-1.12.0.min.js"></script>
	{{-- <script src="{{url('public')}}/assets/js/popper.js"></script> --}}
	<script src="{{url('public')}}/assets/js/bootstrap.min.js"></script>
	{{-- <script src="{{url('public')}}/assets/js/ajax-mail.js"></script> --}}
	{{-- <script src="{{url('public')}}/assets/js/owl.carousel.min.js"></script> --}}
	{{-- <script src="{{url('public')}}/assets/js/jquery.magnific-popup.min.js"></script> --}}
	{{-- <script src="{{url('public')}}/assets/js/plugins.js"></script> --}}
	{{-- <script src="{{url('public')}}/assets/js/main.js"></script> --}}
	<script type="text/javascript">
		$("#success-alert").fadeTo(3000, 500).slideUp(500, function(){ 
			$("#success-alert").slideUp(500); 
		}); 
	</script>
</body>
</html>