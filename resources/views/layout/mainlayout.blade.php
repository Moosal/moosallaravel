<!DOCTYPE html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <meta name="description" content="Smarthr - Bootstrap Admin Template">
		<meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
        <meta name="author" content="Dreamguys - Bootstrap Admin Template">
        <meta name="robots" content="noindex, nofollow">
		<title>Dashboard - HRMS admin template</title>
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
    @include('layout.partials.head')
  </head>
<body>	
    <!-- Main Wrapper -->
<div class="main-wrapper">
	@if(!Route::is(['error-404','error-500','lock-screen','otp','forgot-password','login','registration','change-password'])) 
	@include('layout.partials.header')
    @if(!Route::is(['error-404','job-list','job-view'])) 
	@include('layout.partials.nav')
    @endif
    @if(!Route::is(['error-404','job-list','job-view','login','registration','change-password'])) 
    @include('layout.partials.twocolumnsidebar')                
    @endif 
	@if(!Route::is(['chat','contacts','ticket-view','incoming-call','job-list','job-view','outgoing-call','tasks','ticket-view','video-call','voice-call'])) 
	<!-- Page Wrapper -->
        <div class="page-wrapper">
            <div class="content container-fluid">

				@yield('content')
			</div>		
		</div>
	@endif	
	<!-- /Page Wrapper -->
		@if(Route::is(['chat','tasks','ticket-view','video-call','voice-call'])) 
		<!-- Page Wrapper -->
            <div class="page-wrapper">
            
                <!-- Chat Main Row -->
                <div class="chat-main-row">
                
                    <!-- Chat Main Wrapper -->
                    <div class="chat-main-wrapper">
                    @yield('content')
                   </div>
                </div>
           </div>
           @endif
           @if(Route::is(['contacts'])) 
           <!-- Page Wrapper -->
            <div class="page-wrapper">
            
                <!-- Contact Main Row -->
                <div class="chat-main-row">
                	@yield('content')
                </div>
             </div>
            @endif
            @if(Route::is(['incoming-call'])) 
            
            	<!-- Page Wrapper -->
            <div class="page-wrapper">
            
                <!-- Incoming Call -->
                <div class="call-box incoming-box">
                	@yield('content')
                </div>
               </div>
        
            @endif 
             @if(Route::is(['outgoing-call'])) 
             <!-- Page Wrapper -->
            <div class="page-wrapper">
            
                <!-- Outgoing Call -->
                <div class="call-box outgoing-box">
                    @yield('content')
                </div>
            </div>
            @endif

             @if(Route::is(['job-list','job-view'])) 
             <!-- Page Wrapper -->
            <div class="page-wrapper job-wrapper">
            
                <!-- Page Content -->
                <div class="content container">
                  @yield('content')
                </div>
            </div>
            @endif
	@endif
	@if(Route::is(['error-404','error-500','lock-screen','otp','forgot-password','login','registration','change-password'])) 
	@yield('content')
	@endif

</div>
<!-- /Main Wrapper -->
@if(!Route::is(['error-404','error-500','lock-screen','otp','forgot-password','login','registration','change-password'])) 
@component('components.theme-setting')                
@endcomponent 
@endif 
@include('layout.partials.footer-scripts')
 </body>
</html>