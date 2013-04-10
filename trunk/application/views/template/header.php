<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Gebo Admin Panel</title>
    
        <!-- CKeditor -->
            <script type="text/javascript" src="<?php echo base_url(); ?>ckeditor/ckeditor.js"></script>
        <!-- Bootstrap framework -->
            <link rel="stylesheet" href="<?php echo base_url(); ?>themes/bootstrap/css/bootstrap.min.css" />
            <link rel="stylesheet" href="<?php echo base_url(); ?>themes/bootstrap/css/bootstrap-responsive.min.css" />
        <!-- gebo blue theme-->
            <link rel="stylesheet" href="<?php echo base_url(); ?>themes/css/blue.css" id="link_theme" />
        <!-- breadcrumbs-->
            <link rel="stylesheet" href="<?php echo base_url(); ?>themes/lib/jBreadcrumbs/css/BreadCrumb.css" />
        <!-- tooltips-->
            <link rel="stylesheet" href="<?php echo base_url(); ?>themes/lib/qtip2/jquery.qtip.min.css" />
        <!-- notifications -->
            <link rel="stylesheet" href="<?php echo base_url(); ?>themes/lib/sticky/sticky.css" />
        <!-- code prettify -->
            <link rel="stylesheet" href="<?php echo base_url(); ?>themes/lib/google-code-prettify/prettify.css" />    
        <!-- notifications -->
            <link rel="stylesheet" href="<?php echo base_url(); ?>themes/lib/sticky/sticky.css" />    
        <!-- splashy icons -->
            <link rel="stylesheet" href="<?php echo base_url(); ?>themes/img/splashy/splashy.css" />
		<!-- colorbox -->
            <link rel="stylesheet" href="<?php echo base_url(); ?>themes/lib/colorbox/colorbox.css" />
			
        <!-- main styles -->
            <link rel="stylesheet" href="<?php echo base_url(); ?>themes/css/style.css" />
			
            <!-- <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=PT+Sans" /> -->
	
        <!-- Favicon -->
            <link rel="shortcut icon" href="<?php echo base_url(); ?>themes/favicon.ico" />
		
        <!--[if lte IE 8]>
            <link rel="stylesheet" href="css/ie.css" />
            <script src="js/ie/html5.js"></script>
			<script src="js/ie/respond.min.js"></script>
        <![endif]-->
            <script src="<?php echo base_url(); ?>themes/js/jquery.min.js"></script>
        <!-- smart resize event -->
            <script src="<?php echo base_url(); ?>themes/js/jquery.debouncedresize.min.js"></script>
	<!-- hidden elements width/height -->
            <script src="<?php echo base_url(); ?>themes/js/jquery.actual.min.js"></script>
	<!-- js cookie plugin -->
            <script src="<?php echo base_url(); ?>themes/js/jquery.cookie.min.js"></script>
	<!-- main bootstrap js -->
            <script src="<?php echo base_url(); ?>themes/bootstrap/js/bootstrap.min.js"></script>
	<!-- tooltips -->
            <script src="<?php echo base_url(); ?>themes/lib/qtip2/jquery.qtip.min.js"></script>
	<!-- jBreadcrumbs -->
            <script src="<?php echo base_url(); ?>themes/lib/jBreadcrumbs/js/jquery.jBreadCrumb.1.1.min.js"></script>
	<!-- sticky messages -->
            <script src="<?php echo base_url(); ?>themes/lib/sticky/sticky.min.js"></script>
	<!-- fix for ios orientation change -->
            <script src="<?php echo base_url(); ?>themes/js/ios-orientationchange-fix.js"></script>
	<!-- scrollbar -->
            <script src="<?php echo base_url(); ?>themes/lib/antiscroll/antiscroll.js"></script>
            <script src="<?php echo base_url(); ?>themes/lib/antiscroll/jquery-mousewheel.js"></script>
	<!-- lightbox -->
            <script src="<?php echo base_url(); ?>themes/lib/colorbox/jquery.colorbox.min.js"></script>
        <!-- common functions -->
            <script src="<?php echo base_url(); ?>themes/js/gebo_common.js"></script>
        <!-- datatable -->
            <script src="<?php echo base_url(); ?>themes/lib/datatables/jquery.dataTables.min.js"></script>
            <script src="<?php echo base_url(); ?>themes/lib/datatables/extras/Scroller/media/js/Scroller.min.js"></script>
        <!-- datatable functions -->
            <script src="<?php echo base_url(); ?>themes/js/gebo_datatables.js"></script>
            
            <script>
                $(document).ready(function() {
		//* show all elements & remove preloader
			setTimeout('$("html").removeClass("js")',500);
		});
            </script>
        
        
            
            <script>
		//* hide all elements & show preloader
		document.documentElement.className += 'js';
            </script>
    </head>