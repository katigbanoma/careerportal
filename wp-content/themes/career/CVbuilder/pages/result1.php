<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Resume</title>
    <link type="text/css" rel="stylesheet" href="../css/blue.css" />
    <link type="text/css" rel="stylesheet" href="../css/print.css" media="print"/>
    <!--[if IE 7]>
    <link href="../css/ie7.css" rel="stylesheet" type="text/css"/>
    <![endif]-->
    <!--[if IE 6]>
    <link href="../css/ie6.css" rel="stylesheet" type="text/css"/>
    <![endif]-->
    <script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
    <script type="text/javascript" src="js/jquery.tipsy.js"></script>
    <script type="text/javascript" src="js/cufon.yui.js"></script>
    <script type="text/javascript" src="js/scrollTo.js"></script>
    <script type="text/javascript" src="js/myriad.js"></script>
    <script type="text/javascript" src="js/jquery.colorbox.js"></script>
    <script type="text/javascript" src="js/custom.js"></script>
    <script type="text/javascript">
        Cufon.replace('h1,h2');
    </script>
</head>
<body>
<!-- Begin Wrapper -->
<div id="wrapper">
    <div class="wrapper-top"></div>
    <div class="wrapper-mid">
        <!-- Begin Paper -->
        <div id="paper">
            <div class="paper-top"></div>
            <div id="paper-mid">
                <div class="entry">
                    <!-- Begin Image -->
                    <img class="portrait" src="images/image.jpg" alt="" />
                    <!-- End Image -->
                    <!-- Begin Personal Information -->
                    <div class="self">
                        <h1 class="name"><?php echo $first_name;?>&nbsp;<?php echo $last_name; ?><br /><br />
                            <span></span></h1>
                        <ul>
                            <li class="ad">111 Lorem Street, 34785, Ipsum City</li>
                            <li class="mail"><?php echo $email; ?></li>
                            <li class="tel"><?php echo $phone_id; ?></li>
                        </ul>
                    </div>
                    <!-- End Personal Information -->
                    <!-- Begin Social -->
                    <!--<div class="social">
                        <ul>
                            <li><a class='north' href="#" title="Download .pdf"><img src="images/icn-save.jpg" alt="Download the pdf version" /></a></li>
                            <li><a class='north' href="javascript:window.print()" title="Print"><img src="images/icn-print.jpg" alt="" /></a></li>
                            <li><a class='north' id="contact" href="contact/index.html" title="Contact Me"><img src="images/icn-contact.jpg" alt="" /></a></li>
                            <li><a class='north' href="#" title="Follow me on Twitter"><img src="images/icn-twitter.jpg" alt="" /></a></li>
                            <li><a class='north' href="#" title="My Facebook Profile"><img src="images/icn-facebook.jpg" alt="" /></a></li>
                        </ul>
                    </div>-->
                    <!-- End Social -->
                </div>
                <!-- Begin 1st Row -->
                <div class="entry">
                    <h2>SUMMARY</h2>
                    <p><?php echo $summary; ?></p>
                </div>
                <!-- End 1st Row -->
                <!-- Begin 2nd Row -->
                <div class="entry">
                    <h2>EDUCATION</h2>
                    <div class="content">
                        <h3><?php echo $edu_start_year; ?>&nbsp;<strong>-</strong>&nbsp;<?php echo $edu_end_year; ?></h3>
                        <p><?php echo $institution; ?><br />
                            <em><?php echo $qualification; ?></em></p>
                    </div>
                    <div class="content">
                        <h3><?php echo $edu_start_year; ?>&nbsp;<strong>-</strong>&nbsp;<?php echo $edu_end_year; ?></h3>
                        <p><?php echo $institution; ?><br />
                            <em><?php echo $qualification; ?></em></p>
                </div>
                <!-- End 2nd Row -->
                <!-- Begin 3rd Row -->
                <div class="entry">
                    <h2>EXPERIENCE</h2>
                    <div class="content">
                        <h3><?php echo $exp_start_year; ?>&nbsp;<strong>-</strong>&nbsp;<?php echo $exp_end_year; ?></h3>
                        <p><?php echo $exp_organization; ?><br />
                            <em><?php echo $post_held; ?></em></p>
                        <ul class="info">
                            <li><?php echo $exp_job_description; ?></li>
                        </ul>
                    </div>
                    <div class="content">
                        <h3><?php echo $exp_start_year; ?>&nbsp;<strong>-</strong>&nbsp;<?php echo $exp_end_year; ?></h3>
                        <p><?php echo $exp_organization; ?><br />
                            <em><?php echo $post_held; ?></em></p>
                        <ul class="info">
                            <li><?php echo $exp_job_description; ?></li>
                        </ul>
                    </div>
                </div>
                <!-- End 3rd Row -->
                <!-- Begin 4th Row -->
                <div class="entry">
                    <h2>SKILLS</h2>
                    <div class="content">
                        <h3><?php echo $skill; ?></h3>
                        <!--<ul class="skills">
                            <li>Photoshop</li>
                            <li>Illustrator</li>
                            <li>InDesign</li>
                            <li>Flash</li>
                            <li>Fireworks</li>
                            <li>Dreamweaver</li>
                            <li>After Effects</li>
                            <li>Cinema 4D</li>
                            <li>Maya</li>
                        </ul>-->
                    </div>
                    <div class="content">
                        <h3><?php echo $skill; ?></h3>
                      <!--  <ul class="skills">
                            <li>CSS/XHTML</li>
                            <li>PHP</li>
                            <li>JavaScript</li>
                            <li>Ruby on Rails</li>
                            <li>ActionScript</li>
                            <li>C++</li>
                        </ul>-->
                    </div>
                </div>
                <!-- End 4th Row -->
                <!-- Begin 5th Row -->
                <!--<div class="entry">
                <h2>WORKS</h2>
                    <ul class="works">
                        <li><a href="images/1.jpg" rel="gallery" title="Lorem ipsum dolor sit amet."><img src="images/image.jpg" alt="" /></a></li>
                        <li><a href="images/2.jpg" rel="gallery" title="Lorem ipsum dolor sit amet."><img src="images/image.jpg" alt="" /></a></li>
                        <li><a href="images/3.jpg" rel="gallery" title="Lorem ipsum dolor sit amet."><img src="images/image.jpg" alt="" /></a></li>
                        <li><a href="images/1.jpg" rel="gallery" title="Lorem ipsum dolor sit amet."><img src="images/image.jpg" alt="" /></a></li>
                        <li><a href="images/2.jpg" rel="gallery" title="Lorem ipsum dolor sit amet."><img src="images/image.jpg" alt="" /></a></li>
                        <li><a href="images/3.jpg" rel="gallery" title="Lorem ipsum dolor sit amet."><img src="images/image.jpg" alt="" /></a></li>
                        <li><a href="images/1.jpg" rel="gallery" title="Lorem ipsum dolor sit amet."><img src="images/image.jpg" alt="" /></a></li>
                        <li><a href="images/1.jpg" rel="gallery" title="Lorem ipsum dolor sit amet."><img src="images/image.jpg" alt="" /></a></li>
                    </ul>-->
            </div>
            <!-- Begin 5th Row -->
            <!--</div>-->
            <div class="clear"></div>
            <div class="paper-bottom"></div>
        </div>
        <!-- End Paper -->
    </div>
    <div class="wrapper-bottom"></div>
</div>
<div id="message"><a href="#top" id="top-link">Go to Top</a></div>
<!-- End Wrapper -->
</body>
</html>
