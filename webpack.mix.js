const mix = require('laravel-mix');
const lodash = require("lodash");
const folder = {
    src: "resources/", // source files
    dist: "public/", // build files
    dist_assets: "public/assets/" //build assets files
};

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

var third_party_assets = {
        css_js: [
                {"name": "jquery", "assets": ["./node_modules/jquery/dist/jquery.min.js"]},
                {"name": "slimscroll", "assets": ["./node_modules/slimscroll/example/ssmaster/jquery.slimscroll.min.js",]},
                {"name": "moment", "assets": ["./node_modules/moment/min/moment.min.js"]},
                {"name": "jquery-ui", "assets": ["./node_modules/jquery-ui-dist/jquery-ui.min.js"]},
                {"name": "line-awesome", "assets": ["./node_modules/line-awesome/dist/line-awesome/css/line-awesome.min.css"]},
                {"name": "select2", "assets": ["./node_modules/select2/dist/js/select2.min.js", "./node_modules/select2/dist/css/select2.min.css"]},    
                {"name": "fullcalendar", "assets": ["./node_modules/fullcalendar/dist/fullcalendar.min.js", "./node_modules/fullcalendar/dist/fullcalendar.min.css"]},
               
             ]
    };

	//copying third party assets
    lodash(third_party_assets).forEach(function (assets, type) {
        if (type == "css_js") {
            lodash(assets).forEach(function (plugin) {
                var name = plugin['name'],
                    assetlist = plugin['assets'],
                    css = [],
                    js = [];
                lodash(assetlist).forEach(function (asset) {
                    var ass = asset.split(',');
					for (let i = 0; i < ass.length; ++i) {
                    	if(ass[i].substr(ass[i].length - 3)  == ".js") {
                    		js.push(ass[i]);
                    	} else {
                    		css.push(ass[i]);
                    	}
                	};
                });
            	if(js.length > 0){
            		mix.combine(js, folder.dist_assets + "/libs/" + name + "/" + name + ".min.js");
            	}
            	if(css.length > 0){
            		mix.combine(css, folder.dist_assets + "/libs/" + name + "/" + name + ".min.css");
            	}
            });
        }
    });

    mix.copy('resources/js/app.js','public/assets/js/app.js');
    mix.copy('resources/js/pages/multiselect.min.js','public/assets/js/multiselect.min.js');
    mix.copy('resources/js/pages/line-chart.js','public/assets/js/line-chart.js');
    mix.copy('resources/js/pages/chart.js','public/assets/js/chart.js');
    mix.copy('resources/js/pages/greedynav.js','public/assets/js/greedynav.js');
    mix.copy('resources/js/pages/theme-settings.js','public/assets/js/theme-settings.js');
    mix.copy('resources/js/pages/layout.js','public/assets/js/layout.js');
    mix.copy('resources/js/pages/mask.js','public/assets/js/mask.js');
    mix.copy('resources/js/pages/task.js','public/assets/js/task.js');
    mix.copy('resources/js/pages/ckeditor.js','public/assets/js/ckeditor.js');
    mix.copy('resources/css/ckeditor.css','public/assets/css/ckeditor.css');
    mix.copy('resources/css/bootstrap-datetimepicker.min.css','public/assets/css/bootstrap-datetimepicker.min.css');
    mix.copy('resources/js/bootstrap-datetimepicker.min.js', 'public/assets/js/bootstrap-datetimepicker.min.js');
    mix.copy('resources/css/style.css','public/assets/css/style.css');
    mix.copy('resources/css/material.css','public/assets/css/material.css');
    mix.copy('resources/css/style.css.map','public/assets/css/style.css.map');
    mix.copy('resources/fonts','public/assets/fonts');
    mix.copy('resources/img','public/assets/img');
    mix.copy('resources/css/dataTables.bootstrap4.min.css', 'public/assets/css');
    mix.copy('resources/js/pages/jquery.slimscroll.min.js','public/assets/libs/slimscroll/jquery.slimscroll.min.js');
    mix.copy('node_modules/bootstrap/dist/css', 'public/assets/libs/bootstrap/css');
    mix.copy('node_modules/bootstrap/dist/js', 'public/assets/libs/bootstrap/js');
	mix.copy('resources/css/font-awesome.min.css', 'public/assets/css/font-awesome.min.css');
    mix.copy('node_modules/summernote/dist', 'public/assets/libs/summernote');
    mix.copy('node_modules/jquery.maskedinput/src/jquery.maskedinput.js', 'public/assets/libs/mask');
    mix.copy('resources/js/jquery.fullcalendar.js', 'public/assets/libs/fullcalendar/jquery.fullcalendar.js');
	mix.copy('node_modules/morris.js/morris.css', 'public/assets/libs/morris');
    mix.copy('node_modules/morris.js/morris.js', 'public/assets/libs/morris');
    mix.copy('node_modules/morris.js/morris.min.js', 'public/assets/libs/morris');
	mix.copy('node_modules/raphael/raphael.min.js', 'public/assets/libs/raphael');
	mix.copy('node_modules/sticky-kit/dist/sticky-kit.min.js', 'public/assets/libs/sticky-kit');
    mix.copy('node_modules/datatables.net-bs4/js/dataTables.bootstrap4.min.js', 'public/assets/js');
    mix.copy('node_modules/datatables.net/js/jquery.dataTables.min.js', 'public/assets/js');
    mix.copy('node_modules/chart.js/dist', 'public/assets/libs/chart.js');
	mix.copy('node_modules/multiselect-two-sides/dist/js/multiselect.min.js', 'public/assets/js/multiselect.min.js');
	mix.copy('node_modules/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js', 'public/assets/js');
	mix.copy('node_modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.css', 'public/assets/libs/bootstrap-tagsinput');
    mix.copy('node_modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.js', 'public/assets/libs/bootstrap-tagsinput');
    mix.copy('node_modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js', 'public/assets/libs/bootstrap-tagsinput');
    mix.copy('node_modules/line-awesome/dist/line-awesome/fonts', 'public/assets/libs/fonts');
    mix.copy('node_modules/daterangepicker/daterangepicker.css', 'public/assets/css');
    mix.copy('node_modules/daterangepicker/daterangepicker.js', 'public/assets/js');
  


	
    
   
	