<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="{{url('assets/libs/bootstrap/css/bootstrap.min.css')}}">
		<!-- Fontawesome CSS -->
		<link rel="stylesheet" href="{{url('assets/css/font-awesome.min.css')}}">
		
		<link rel="stylesheet" href="{{url('assets/libs/line-awesome/line-awesome.min.css')}}">
		<link rel="stylesheet" href="{{url('assets/css/material.css')}}">
		<!-- Select2 css -->
		<link href="{{ URL::asset('/assets/libs/select2/select2.min.css')}}" rel="stylesheet" type="text/css" />
		<!-- Datatable css -->
		<link href="{{ URL::asset('assets/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
		<!-- Datetimepicker CSS --> 
		<link href="{{ URL::asset('/assets/css/bootstrap-datetimepicker.min.css')}}" rel="stylesheet" type="text/css" />
		<!-- Daterangepicker CSS --> 
		<link href="{{ URL::asset('/assets/css/daterangepicker.css')}}" rel="stylesheet" type="text/css" />
		 <!--  Tagsinput  CSS -->
		 <link rel="stylesheet" href="{{url('assets/libs/bootstrap-tagsinput/bootstrap-tagsinput.css')}}"> 
		 <!-- Summernote CSS -->
		 <link rel="stylesheet" href="{{url('assets/libs/summernote/summernote-bs4.css')}}" /> 
		 <!-- Morris css -->
		 <link href="{{ URL::asset('assets/libs/morris/morris.css')}}" rel="stylesheet" type="text/css" />
		 @if(Route::is(['compose']))
		 <link rel="stylesheet" href="{{url('assets/css/ckeditor.css')}}">
		 @endif
		  <!-- Calendar CSS -->
		  <link href="{{ URL::asset('/assets/libs/fullcalendar/fullcalendar.min.css')}}" rel="stylesheet" type="text/css" />
		
		<!-- Main CSS -->
		<link rel="stylesheet" href="{{url('assets/css/style.css')}}">