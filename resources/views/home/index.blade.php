<!DOCTYPE html>
<html lang="en"> 
<head>
	<title>NICOURSE</title>
	
	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Bootstrap 4 Landing Page Template For Online Courses">
	<meta name="author" content="Xiaoying Riley at 3rd Wave Media">    
	<link rel="shortcut icon" href="favicon.ico"> 
	
	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:800|Roboto:400,500,700&display=swap" rel="stylesheet">
	
	<!-- FontAwesome JS-->
	<script defer src="assets/fontawesome/js/all.min.js"></script>

	<!-- Theme CSS -->  
	<link id="theme-style" rel="stylesheet" href="assets/css/theme.css">


</head> 

<body>    
	
	{{-- Header --}}
	@include('home.layouts.header')

	{{-- Content --}}
	@include('home.layouts.body')

	{{-- Footer --}}
	@include('home.layouts.footer')
	
	<!-- Javascript -->   
	<script src="assets/plugins/popper.min.js"></script>      
	<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>  
	<script src="assets/js/main.js"></script>  

</body>
</html> 

