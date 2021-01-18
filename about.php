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
                <!-- content -->
                <div class="content">
         
                    <?php include 'includes/sidebar.php'; ?>

                    <div class="column-wrapper">
                    
                        <div class="ff_panel-conainer fl-wrap">
                            <!-- portfolio start -->
                            <div class="gallery-items min-pad   four-column fl-wrap lightgallery">
                               
                                <?php displayPortfolio(); ?>
                                
                            </div>
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
