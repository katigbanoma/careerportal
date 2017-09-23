    <?php 
        get_header(); 
        global $testing_cvfile;
    ?>
   
    <link href="<?php echo get_stylesheet_directory_uri()?>/CVbuilder/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri()?>/CVbuilder/bower_components/bootstrap-tokenfield/dist/css/bootstrap-tokenfield.min.css" />
    <link href="<?php echo get_stylesheet_directory_uri()?>/CVbuilder/css/2-col-portfolio.css" rel="stylesheet">
    <link href="<?php echo get_stylesheet_directory_uri()?>/CVbuilder/css/jquery.steps.css" rel="stylesheet" />
    <link href="<?php echo get_stylesheet_directory_uri()?>/CVbuilder/css/main.css" rel="stylesheet"/>
    <link href="<?php echo get_stylesheet_directory_uri()?>/CVbuilder/css/normalize.css" rel="stylesheet"/>

    <?php include $testing_cvfile; ?>

    <?php if($_GET['active'] == null): ?>
        <?php header('Location: ' . get_permalink() . '?active=CVbuilder') ?>
    <?php endif ?>

   
    
    <?php get_footer(); ?>
    <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri()?>/CVbuilder/js/jquery-3.1.1.js"></script>
    <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri()?>/CVbuilder/js/jquery.steps.min.js"></script>
    <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri()?>/CVbuilder/js/jquery.validate.min.js"></script>
    <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri()?>/CVbuilder/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri()?>/CVbuilder/bower_components/bootstrap-tokenfield/dist/bootstrap-tokenfield.min.js"></script>
    <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri()?>/CVbuilder/js/utility.js"></script>



    <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri()?>/CVbuilder/js/jquery.validate.min.js"></script>
    <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri()?>/CVbuilder/js/add_field_skl.js"></script>
    <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri()?>/CVbuilder/js/steps.js"></script>
    <!--<script type="text/javascript" src="../js/additional-methods.min.js"></script>-->
    <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri()?>/CVbuilder/js/add_field_edu.js"></script>
    <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri()?>/CVbuilder/js/add_field_exp.js"></script>

    <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri()?>/CVbuilder/js/add_field_ref.js"></script>