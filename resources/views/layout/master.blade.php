<!DOCTYPE html>
<html>
<head>
  	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="{{ asset('css/app.css')}}" type="text/css" rel="stylesheet"/>
	<script src="vendors/jquery/dist/jquery.min.js"></script>
</head>
<body>
	@yield('content')
	<script scr="{{asset('js/app.js')}}"type="text/javascript"></script>
	<script src="/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
	<script src="/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
	<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script>
	<script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[3]='ADDRESS';ftypes[3]='address';fnames[4]='PHONE';ftypes[4]='phone';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
</body>
</html>