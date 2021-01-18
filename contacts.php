<!DOCTYPE HTML>
<html lang="en">
<?php
include 'function.php';
include 'includes/header.php';
?>
    <body>
        <!--loader-->
        <div class="loader-wrap">
            <div class="spinner">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
            </div>
        </div>
        <!--loader end-->
        <!-- main start  -->
        <div id="main">
  
            <?php include 'includes/nav.php'; ?>

            <div id="wrapper">
                <div class="content">
            
                    <?php include 'includes/sidebar.php'; ?>

                    <div class="column-wrapper" style="padding-left:0px !important; padding-right:0px !important;">
                    
                        <div class="ff_panel-conainer fl-wrap">
                            <!-- portfolio start -->
                            <section id="sec1">
                            <div class="container small-container">
                                <div class="section-title fl-wrap">
                                    <h3>Contact Information</h3>
                                    <h4>Sed tempor iaculis massa faucibus feugiat. In fermentum facilisis massa</h4>
                                    <div class="section-number">01.</div>
                                </div>
                                <div class="column-wrapper_item fl-wrap">
                                    <div class="column-wrapper_text fl-wrap">
                                        <p>If you’d like to talk about a project, our work or anything else then get in touch.</p>
                                        <div class="contact-details fl-wrap">
                                            <ul>
                                                <li><span>Mail :</span><a href="#" target="_blank">yourmail@domain.com</a></li>
                                                <li><span>Adress :</span><a href="#" target="_blank">USA 27TH Brooklyn NY</a></li>
                                                <li><span>Phone :</span><a href="#">+7(111)123456789</a> , <a href="#">+8(222)987654321</a></li>
                                            </ul>
                                        </div>
                                        <a href="#sec3" class="custom-scroll-link btn fl-btn">Say Hello</a>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!--section -->
                        <section id="sec3">
                            <div class="container small-container">
                                <div class="section-title fl-wrap">
                                    <h3>Get In Touch</h3>
                                    <h4>Sed tempor iaculis massa faucibus feugiat. In fermentum facilisis massa</h4>
                                    <div class="section-number">03.</div>
                                </div>
                                <div class="column-wrapper_item fl-wrap">
                                    <div class="column-wrapper_text fl-wrap">
                                        <div id="contact-form" class="fl-wrap">
                                            <div id="message"></div>
                                            <form  class="custom-form" action="php/contact.php" name="contactform" id="contactform">
                                                <fieldset>
                                                    <input type="text" name="name" id="name" placeholder="Your Name *" value=""/>
                                                    <input type="text"  name="email" id="email" placeholder="Email Address *" value=""/>
                                                    <textarea name="comments"  id="comments" cols="40" rows="3" placeholder="Your Message:"></textarea>
                                                    <button class="btn float-btn flat-btn color-bg" id="submit">Send Message </button>
                                                </fieldset>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                            <!-- portfolio end -->
                        </div>
                        <!--section end  -->
                        <!--footer -->
                        <footer class="min-footer fl-wrap content-animvisible">
                            <div class="container small-container">
                                <div class="footer-inner fl-wrap">
                                    <!-- policy-box-->
                                    <div class="policy-box">
                                        <span>&#169; RD Visuals 2021  /  All rights reserved. </span>
                                    </div>
                                    <!-- policy-box end-->
                                    <a href="#" class="to-top-btn to-top">Back to top <i class="fal fa-long-arrow-up"></i></a>
                                </div>
                            </div>
                        </footer>
                        <!--footer end  -->
                    </div>
                    <!-- column-wrapper -->
                </div>

                <!-- content -->
                
                <!--content end-->
                <!--share-wrapper-->
                <div class="share-wrapper">
                    <div class="share-container fl-wrap  isShare"></div>
                </div>
                <!--share-wrapper end-->
            </div>
            <!-- wrapper end -->
            <!-- sidebar -->
            <div class="sb-overlay"></div>
            
            <!-- sidebar end -->
            <!-- cursor-->
            <div class="element">
                <div class="element-item"></div>
            </div>
            <!-- cursor end-->
        </div>
        <!-- Main end -->
        <!--=============== scripts  ===============-->
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/plugins.js"></script>
        <script type="text/javascript" src="js/scripts.js"></script>
    </body>
</html>
