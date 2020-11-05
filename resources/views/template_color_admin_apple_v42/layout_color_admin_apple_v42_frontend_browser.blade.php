
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
	<link href="{{ asset('/public/').'/'.$root }}/assets/plugins/animate/animate.min.css" rel="stylesheet" />
	<link href="{{ asset('/public/').'/'.$root }}/assets/css/one-page-parallax/style.min.css" rel="stylesheet" />
	<link href="{{ asset('/public/').'/'.$root }}/assets/css/one-page-parallax/style-responsive.min.css" rel="stylesheet" />
	<link href="{{ asset('/public/').'/'.$root }}/assets/css/one-page-parallax/theme/default.css" id="theme" rel="stylesheet" />
	<!-- ================== END BASE CSS STYLE ================== -->
	
	<!-- ================== BEGIN PAGE LEVEL STYLE ================== -->
	<link href="{{ asset('/public/').'/'.$root }}/assets/plugins/jquery-smart-wizard/src/css/smart_wizard.css" rel="stylesheet" />
	<link href="{{ asset('/public/').'/'.$root }}/assets/plugins/parsley/src/parsley.css" rel="stylesheet" />
	<!-- ================== END PAGE LEVEL STYLE ================== -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="{{ asset('/public/').'/'.$root }}/assets/plugins/pace/pace.min.js"></script>
	<!-- ================== END BASE JS ================== -->
	
	<!-- ================== BEGIN CSS ADDITIONAL ================== -->
	<link href="{{ asset('/public/') }}/additional/parasuhu.css" rel="stylesheet" />
	<!-- ================== END CSS ADDITIONAL ================== -->
</head>
<body data-spy="scroll" data-target="#header" data-offset="51">
	<!-- begin #page-container -->
	<div id="page-container" class="fade">
		<!-- begin #header -->
		<div id="header" class="header navbar navbar-transparent navbar-fixed-top">
			<!-- begin container -->
			<div class="container">
				<!-- begin navbar-header -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#header-navbar">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a href="{{url('/')}}" class="navbar-brand font-weight-bold ps-logo-color">
						Logique
					</a>
				</div>
				<!-- end navbar-header -->
				<!-- begin navbar-collapse -->
				<div class="collapse navbar-collapse" id="header-navbar">
					<ul class="nav navbar-nav navbar-right">
						<li class="nav-item">
							<a class="nav-link " href="{{url('/')}}/login" >
								Login
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link " href="{{url('/')}}/Registration_logique" >
								Register
							</a>
						</li>
					</ul>
				</div>
				<!-- end navbar-collapse -->
			</div>
			<!-- end container -->
		</div>
		<!-- end #header -->
		
		
		<div id="form" class="content" data-scrollview="true">
			<!-- begin container -->
			<div class="container" data-animation="true" data-animation-type="fadeInDown">
				<h2 class="content-title">Daftarkan Diri Anda</h2>

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
			<!-- end container -->
		</div>
		
	</div>
	<!-- end #page-container -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="{{ asset('/public/').'/'.$root }}/assets/plugins/jquery/jquery-3.3.1.min.js"></script>
	<script src="{{ asset('/public/').'/'.$root }}/assets/plugins/bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
	<!--[if lt IE 9]>
		<script src="{{ asset('/public/').'/'.$root }}/assets/crossbrowserjs/html5shiv.js"></script>
		<script src="{{ asset('/public/').'/'.$root }}/assets/crossbrowserjs/respond.min.js"></script>
		<script src="{{ asset('/public/').'/'.$root }}/assets/crossbrowserjs/excanvas.min.js"></script>
	<![endif]-->
	<script src="{{ asset('/public/').'/'.$root }}/assets/plugins/js-cookie/js.cookie.js"></script>
	<script src="{{ asset('/public/').'/'.$root }}/assets/plugins/scrollMonitor/scrollMonitor.js"></script>
	<script src="{{ asset('/public/').'/'.$root }}/assets/plugins/paroller/jquery.paroller.min.js"></script>
	<script src="{{ asset('/public/').'/'.$root }}/assets/js/one-page-parallax/apps.min.js"></script>
	<!-- ================== END BASE JS ================== -->
	
	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
	<script src="{{ asset('/public/').'/'.$root }}/assets/plugins/parsley/dist/parsley.js"></script>
	<script src="{{ asset('/public/').'/'.$root }}/assets/plugins/jquery-smart-wizard/src/js/jquery.smartWizard.js"></script>
	<script src="{{ asset('/public/').'/'.$root }}/assets/js/demo/form-wizards-validation.demo.min.js"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->
	
	
	<script>    
		$(document).ready(function() {
			App.init();
			FormWizardValidation.init();
		});
	</script>
</body>
</html>
