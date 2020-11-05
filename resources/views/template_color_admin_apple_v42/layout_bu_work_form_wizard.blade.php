
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
    @include('general_layout.title')
    @include('general_layout.meta_frontend')	
	
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	<link href="{{ asset('/public/').'/'.$root }}/assets/plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet" />
	<link href="{{ asset('/public/').'/'.$root }}/assets/plugins/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" />
	<link href="{{ asset('/public/').'/'.$root }}/assets/plugins/font-awesome/5.3/css/all.min.css" rel="stylesheet" />
	<link href="{{ asset('/public/').'/'.$root }}/assets/plugins/ionicons/css/ionicons.min.css" rel="stylesheet" />
	<link href="{{ asset('/public/').'/'.$root }}/assets/plugins/animate/animate.min.css" rel="stylesheet" />
	<link href="{{ asset('/public/').'/'.$root }}/assets/css/apple/style.min.css" rel="stylesheet" />
	<link href="{{ asset('/public/').'/'.$root }}/assets/css/apple/style-responsive.min.css" rel="stylesheet" />
	<link href="{{ asset('/public/').'/'.$root }}/assets/css/apple/theme/default.css" rel="stylesheet" id="theme" />
	<!-- ================== END BASE CSS STYLE ================== -->
	
	<!-- ================== BEGIN PAGE LEVEL STYLE ================== -->
	<link href="{{ asset('/public/').'/'.$root }}/assets/plugins/jquery-smart-wizard/src/css/smart_wizard.css" rel="stylesheet" />
	<link href="{{ asset('/public/').'/'.$root }}/assets/plugins/parsley/src/parsley.css" rel="stylesheet" />
	<!-- ================== END PAGE LEVEL STYLE ================== -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="{{ asset('/public/').'/'.$root }}/assets/plugins/pace/pace.min.js"></script>
	<!-- ================== END BASE JS ================== -->
</head>
<body>
	<!-- begin #page-loader -->
	<div id="page-loader" class="fade show"><span class="spinner"></span></div>
	<!-- end #page-loader -->
	
	<!-- begin #page-container -->
	{!!color_admin_apple_v42_page_container_without_sidebar($agent)!!}
		<!-- begin #header -->

		
		<div id="header" class="header navbar navbar-default navbar-fixed-top">
			<!-- begin container -->
			<div class="container">
				<!-- begin navbar-header -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#header-navbar">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a href="index.html" class="navbar-brand">
						<span class="brand-logo"></span>
						<span class="brand-text">
							<span class="text-theme">Color</span> Admin
						</span>
					</a>
				</div>
				<!-- end navbar-header -->
				<!-- begin navbar-collapse -->
				<div class="collapse navbar-collapse" id="header-navbar">
					<ul class="nav navbar-nav navbar-right">
						<li class="nav-item dropdown">
							<a class="nav-link active" href="#home" data-click="scroll-to-target" data-scroll-target="#home" data-toggle="dropdown">HOME <b class="caret"></b></a>
							<div class="dropdown-menu dropdown-menu-left animated fadeInDown">
								<a class="dropdown-item" href="index.html">Page with Transparent Header</a>
								<a class="dropdown-item" href="index_inverse_header.html">Page with Inverse Header</a>
								<a class="dropdown-item" href="index_default_header.html">Page with White Header</a>
								<a class="dropdown-item" href="extra_element.html">Extra Element</a>
							</div>
						</li>
						<li class="nav-item"><a class="nav-link" href="#about" data-click="scroll-to-target">ABOUT</a></li>
						<li class="nav-item"><a class="nav-link" href="#team" data-click="scroll-to-target">TEAM</a></li>
						<li class="nav-item"><a class="nav-link" href="#service" data-click="scroll-to-target">SERVICES</a></li>
						<li class="nav-item"><a class="nav-link" href="#work" data-click="scroll-to-target">WORK</a></li>
						<li class="nav-item"><a class="nav-link" href="#client" data-click="scroll-to-target">CLIENT</a></li>
						<li class="nav-item"><a class="nav-link" href="#pricing" data-click="scroll-to-target">PRICING</a></li>
						<li class="nav-item"><a class="nav-link" href="#contact" data-click="scroll-to-target">CONTACT</a></li>
					</ul>
				</div>
				<!-- end navbar-collapse -->
			</div>
			<!-- end container -->
		</div>

		<!-- end #header -->
		
		<!-- begin #content -->
		<div id="content" class="content row  justify-content-md-center">		
			<div class="col-md-10">
				<!-- begin page-header -->
				@include($template.'.'.$controller.'.page_header')
				<!-- end page-header -->
			
				@if(Session::has('message'))
					{!!color_admin_apple_v42_flash_message(dmha_40_id_check_col( Session::get('message'),'status'),dmha_40_id_check_col( Session::get('message'),'nama'),dmha_40_id_check_col( Session::get('message'),'keterangan'))!!}
				@endif
				
				<!-- begin wizard-form -->
					<!-- UI_FORM_open_form_wizard_with_id('form-control-with-bg',$id) -->
					
					<form class="form-control-with-bg" name="form-wizard" action="{{url('/')}}/formfront/post" method="POST" id="form_430">
					<!-- begin wizard -->
					@csrf
    				{!!color_admin_apple_v42_hidden(NULL,$id,2,NULL,NULL,NULL)!!}
					<div id="wizard">
						
					{!!color_admin_apple_v42_form_wizard(NULL,$id,2,NULL,NULL,NULL)!!}
					</div>
					<!-- end wizard -->
				</form>
				<!-- end wizard-form -->
			</div>
		</div>
		<!-- end #content -->
		
		
		<!-- begin scroll to top btn -->
		<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
		<!-- end scroll to top btn -->
	</div>
	<!-- end page container -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="{{ asset('/public/').'/'.$root }}/assets/plugins/jquery/jquery-3.3.1.min.js"></script>
	<script src="{{ asset('/public/').'/'.$root }}/assets/plugins/jquery-ui/jquery-ui.min.js"></script>
	<script src="{{ asset('/public/').'/'.$root }}/assets/plugins/bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
	<!--[if lt IE 9]>
		<script src="{{ asset('/public/').'/'.$root }}/assets/crossbrowserjs/html5shiv.js"></script>
		<script src="{{ asset('/public/').'/'.$root }}/assets/crossbrowserjs/respond.min.js"></script>
		<script src="{{ asset('/public/').'/'.$root }}/assets/crossbrowserjs/excanvas.min.js"></script>
	<![endif]-->
	<script src="{{ asset('/public/').'/'.$root }}/assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script src="{{ asset('/public/').'/'.$root }}/assets/plugins/js-cookie/js.cookie.js"></script>
	<script src="{{ asset('/public/').'/'.$root }}/assets/js/theme/apple.min.js"></script>
	<script src="{{ asset('/public/').'/'.$root }}/assets/js/apps.min.js"></script>
	<!-- ================== END BASE JS ================== -->
	
	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
	<script src="{{ asset('/public/').'/'.$root }}/assets/plugins/parsley/dist/parsley.js"></script>
	<script src="{{ asset('/public/').'/'.$root }}/assets/plugins/jquery-smart-wizard/src/js/jquery.smartWizard.js"></script>
	<script src="{{ asset('/public/').'/'.$root }}/assets/js/demo/form-wizards-validation.demo.min.js"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->
	
	<script>
		{!!ajax_header_csrf()!!}

		$(document).ready(function() {
			App.init();
			FormWizardValidation.init();
    		$('#MyModals').modal('show');
		});
	</script>
</body>
</html>
