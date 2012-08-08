<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title>Next</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
		<link rel="shortcut icon" href="gfx/favicon.ico" />

		<!--[if lt IE 9]>
    		<script src="js/html5.js"></script>
    		<style type="text/css">header,section,article,aside,nav,footer{margin: 0}</style>
             <link rel="stylesheet" href="css/ie-legacy.css" />
		<![endif]-->

        <link rel="stylesheet" href="css/lib/bootstrap.min.css">
        <link rel="stylesheet" href="css/eze.css" />
        <link rel="stylesheet" href="css/lib/font-awesome.css">
        <link rel="stylesheet" href="css/lib/chosen.css">


	</head>
    <body class="eze" style="background: url(img/site.jpg)">

        <?php if (!isset($_GET['notoolbar'])) include_once('raw/raw-toolbar.php'); ?> 
        <?php if (!isset($_GET['nopencils'])) include_once('raw/raw-pencils.php'); ?>
        <?php 
            if (!isset($_GET['nostack'])) {
        ?>
        <section class="eze-bigmodal">
            <section class="eze-modal-content">
                <?php include_once('raw/raw-stack.php'); ?>
                <section class="eze-stack-content" style="top:168px">

                    

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

            <?php 
                if (isset($_GET['layout']))
                    include_once('raw/raw-modal-layout.php');
                if (isset($_GET['addcontent']))
                    include_once('raw/raw-modal-add-content.php');
                if (isset($_GET['activity']))
                    include_once('raw/raw-modal-activity.php');
                if (isset($_GET['publish']))
                    include_once('raw/raw-modal-publish.php');
            ?>
        <?php } ?>


        <?php include_once('raw/raw-dam.php'); ?>
        <script type="text/javascript" src="js/jquery-latest.min.js "></script>
        <script type="text/javascript" src="js/jquery.mousewheel.js"></script>
        <script type="text/javascript" src="js/jquery.jscrollpane.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/chosen.jquery.min.js"></script>
        <script type="text/javascript">
            $(function(){$(".chzn-select").chosen();});
        </script>

        <!-- Scroll Pane, shoud use ::-webkit-scrollbar for modern browsers http://www.webkit.org/blog/363/styling-scrollbars/ 
        <script type="text/javascript">$(function(){$('.scroll-pane').jScrollPane();});</script>
        <script type="text/javascript">$(function(){$('.scroll-pane2').jScrollPane();});</script>
        <link rel="stylesheet" href="css/lib/jquery.jscrollpane.css">  -->
    </body>
</html>
