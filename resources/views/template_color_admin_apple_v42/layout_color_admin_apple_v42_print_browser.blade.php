<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
    @include('general_layout.title')
    <link rel="stylesheet" type="text/css" href="{{ asset('/public/print') }}/general.css">
	<link href="{{ asset('/public/').'/'.$root }}/assets/css/apple/style.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="{{ asset('/public/print') }}/layout_portrait_A4.css">
</head>
<body>
    
    @include($template.'.'.$controller.'.panel.panel_'.$page) 
</body>
</html>
