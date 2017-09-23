<?php get_header();
/**
 * Created by PhpStorm.
 * User: LordRahl
 * Date: 2/13/17
 * Time: 1:32 PM
 */

session_start();
global $test_tpl;


// echo $_SESSION['user_id'];
$_SESSION['user_id']=1;

?>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri()?>/assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri()?>/assets/bower_components/bootstrap/dist/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri()?>/assets/styles/styles.css">
    
 
    </h3>
    <?php include $test_tpl; ?>

    <?php if($_GET['action'] == null): ?>
        <?php header('Location: ' . get_permalink() . '?action=select_question') ?>
    <?php endif ?>

<script src="<?php echo get_stylesheet_directory_uri()?>/assets/bower_components/jquery/dist/jquery.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri()?>/assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri()?>/assets/scripts/jquery.form.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri()?>/assets/scripts/utility.js"></script>
<script src="<?php echo get_stylesheet_directory_uri()?>/assets/scripts/startTest.js"></script>

<?php get_footer(); ?>
