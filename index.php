<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title>Next</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
		<link rel="shortcut icon" href="images/favicon.ico" />

		<!--[if lt IE 9]>
    		<script src="js/html5.js"></script>
    		<style type="text/css">header,section,article,aside,nav,footer{margin: 0}</style>
             <link rel="stylesheet" href="css/ie-legacy.css" />
		<![endif]-->

        <link rel="stylesheet" href="css/lib/bootstrap.min.css">
        <link rel="stylesheet" href="css/eze.css" />
        <link rel="stylesheet" href="css/lib/font-awesome.css">
        <link rel="stylesheet" href="css/lib/chosen.css">

        
        <style type="text/css">
            .switcher { position: absolute; margin: 0; list-style: none; bottom: 50px; right: 0; width: 100px; padding: 10px; background: #000; z-index: 99999; }
            .switcher li a { color: #fff; font-size: 11px; display: block}
            .switcher li a:hover { background: #fff; color: #000 } .switcher li a:active { background: cyan; }
        </style>


	</head>
    <body class="eze" style="background: url(img/site.jpg)">

        <ul class="switcher">
            <li><a href="?nostack">Toolbar</a></li>
            <li><a href="?dashboard">Dashboard</a></li>
            <li><a href="?view=attributes">Object edit</a></li>
            <li><a href="?view=table">Data table</a></li>
            <li><a href="?view=keymedia-browse">KeyMedia Browse</a></li>
            <li><a href="?view=keymedia-crop">KeyMedia Crop</a></li>
            <li><a href="?view=sitemap">Sitemap</a></li>
            <li><a href="?view=layout">Layout</a></li>
            <li><a href="?addcontent">Modal: Create</a></li>
            <li><a href="?activity">Modal: Activity</a></li>
            <li><a href="?publish">Modal: Publish</a></li>
            <li><a href="?devices">Modal: Devices</a></li>
        </ul>

        <?php if (!isset($_GET['notoolbar'])) include_once('raw/raw-toolbar.php'); ?> 
        <?php if (!isset($_GET['nopencils'])) include_once('raw/raw-pencils.php'); ?>
        <?php 
            if (!isset($_GET['nostack'])) {
        ?>
        <section class="eze-bigmodal">
            <section class="eze-modal-content">
                <?php include_once('raw/raw-stack.php'); ?>

                <section class="stack-item move-in last" style="top:124px">
                    <header>
                        <h1>
                            <img src="img/32x32/Documents 32x32.png" />
                            Fifth and last level
                        </h1>
                        <button class="btn">Save and go back</button>
                        <div class="eze-autosave"><img src="images/loader.gif" /> Saving…</div>
                    </header>
                    <section class="eze-stack-content">

                        <?php
                            switch ($_GET['view']) {
                                case 'table':
                                    include_once('raw/raw-table.php');
                                    break;
                                case 'keymedia-browse':
                                    include_once('raw/raw-keymedia-browse.php');
                                    break;
                                case 'keymedia-crop':
                                    include_once('raw/raw-keymedia-crop.php');
                                    break;
                                case 'sitemap':
                                    include_once('raw/raw-sitemap.php');
                                    break;
                                case 'layout':
                                    include_once('raw/raw-layout.php');
                                    break;
                                case 'attributes':
                                default:
                                    include_once('raw/raw-attributes.php');
                                    include_once('raw/raw-object-sidebar.php');
                                    break;
                            }
                        ?>

                    </section>
                </section>
            </section>
        </section>

            <?php 
                if (isset($_GET['addcontent']))
                    include_once('raw/raw-modal-add-content.php');
                if (isset($_GET['activity']))
                    include_once('raw/raw-modal-activity.php');
                if (isset($_GET['publish']))
                    include_once('raw/raw-modal-publish.php');
                if (isset($_GET['devices']))
                    include_once('raw/raw-modal-devices.php');
                if (isset($_GET['dashboard']))
                    include_once('raw/raw-modal-dashboard.php');
            ?>
        <?php } ?>

        <?php include_once('raw/raw-modal-single-edit.php'); ?>
        <script type="text/javascript" src="js/jquery-latest.min.js "></script>
        <script type="text/javascript" src="js/jquery.mousewheel.js"></script>
        <script type="text/javascript" src="js/jquery.jscrollpane.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/chosen.jquery.min.js"></script>
        <script type="text/javascript">
            $(function(){$(".chzn-select").chosen({disable_search_threshold: 3});});
        </script>

        <!-- Scroll Pane, shoud use ::-webkit-scrollbar for modern browsers http://www.webkit.org/blog/363/styling-scrollbars/ 
        <script type="text/javascript">$(function(){$('.scroll-pane').jScrollPane();});</script>
        <script type="text/javascript">$(function(){$('.scroll-pane2').jScrollPane();});</script>
        <link rel="stylesheet" href="css/lib/jquery.jscrollpane.css">  -->
    </body>
</html>
