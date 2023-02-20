       <!-- jQuery -->
        <script src="{{ URL::asset('assets/libs/jquery/jquery.min.js')}}"></script>
		
		<!-- Slimscroll JS -->
        <script src="{{ URL::asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
		
		<!-- Slimscroll JS -->
        <script src="{{ URL::asset('assets/libs/slimscroll/jquery.slimscroll.min.js')}}"></script>
        <script src="{{ URL::asset('/assets/libs/moment/moment.min.js')}}"></script>
        <script src="{{ URL::asset('assets/libs/jquery-ui/jquery-ui.min.js')}}"></script>
        <!-- Select2 JS -->
        <script src="{{ URL::asset('assets/libs/select2/select2.min.js')}}"></script>
        <!-- Data Table JS -->
        <script src="{{ URL::asset('assets/js/jquery.dataTables.min.js')}}"></script>
        <script src="{{ URL::asset('assets/js/dataTables.bootstrap4.min.js')}}"></script>
        <!-- Datetimepicker JS -->
        <script src="{{ URL::asset('assets/js/bootstrap-datetimepicker.min.js')}}"></script>
        <script src="{{ URL::asset('assets/js/daterangepicker.js')}}"></script>
	    <!--  Tagsinput  JS -->
        <script src="{{ URL::asset('assets/libs/bootstrap-tagsinput/bootstrap-tagsinput.min.js')}}"></script>
        <!-- Sticky JS -->
        <script src="{{ URL::asset('assets/libs/sticky-kit/sticky-kit.min.js')}}"></script>
        <!-- Summernote JS -->
        <script src="{{ URL::asset('assets/libs/summernote/summernote-bs4.js')}}"></script>
        <!-- Data Table JS -->
        <script src="{{ URL::asset('assets/libs/fullcalendar/fullcalendar.min.js')}}"></script>
        <script src="{{ URL::asset('assets/libs/fullcalendar/jquery.fullcalendar.js')}}"></script>
        <!-- Mask JS -->
        <script src="{{ URL::asset('assets/libs/mask/jquery.maskedinput.js')}}"></script>
         @if(Route::is(['compose']))
        <script src="{{ URL::asset('assets/js/ckeditor.js')}}"></script>
        @endif
        @if(Route::is(['dashboard']))
        <!-- Morris JS -->
        <script src="{{ URL::asset('assets/libs/morris/morris.min.js')}}"></script>
        <script src="{{ URL::asset('assets/libs/raphael/raphael.min.js')}}"></script>
        <script src="{{ URL::asset('assets/js/chart.js')}}"></script>
        @endif
        @if(Route::is(['jobs-dashboard','user-dashboard']))
        <script src="{{ URL::asset('assets/libs/chart.js/chart.min.js')}}"></script>
        <script src="{{ URL::asset('assets/js/line-chart.js')}}"></script>
        @endif
        @if(Route::is(['leave-settings']))
        <!-- Multiselect JS -->
		<script src="{{ URL::asset('assets/js/multiselect.min.js')}}"></script>
        @endif
        <!-- Task JS -->
        <script src="{{ URL::asset('assets/js/task.js')}}"></script>
        @if(!Route::is(['error-404','error-500','lock-screen','otp','forgot-password','login','registration','job-list','job-view','change-password'])) 
        <!-- Theme Settings JS -->
		<script src="{{ URL::asset('assets/js/layout.js')}}"></script>
		<script src="{{ URL::asset('assets/js/theme-settings.js')}}"></script>
		<script src="{{ URL::asset('assets/js/greedynav.js')}}"></script>
        @endif
		<!-- Custom JS -->
		<script  src="{{ URL::asset('assets/js/app.js')}}"></script>
		 